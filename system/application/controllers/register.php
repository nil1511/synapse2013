<?php

define("TABLE", "synapse2013_registration");
require("registrations_array.php");
require("event_extras.php");
class Register extends Controller {

	var $postprocess = array(
		//"inc" => "inc_edit_member"
		);
	function __construct() {
		Controller::__construct();
		$this->load->helper( array('form', 'url') );
		$this->load->database();

	}

	function verify_form($event) {
		$this->load->helper( array('form', 'url') );
		$this->load->library( 'form_validation' );
		$this->load->database();
	
		if( $this->input->post('da_student') ) {
			$this->form_validation->set_rules( 'da_student_id', 'Student ID', 'required|numeric|exact_length[9]|xss_clean' );
		}
		else {
		    $this->form_validation->set_rules( 'email', 'E-Mail', 'required|valid_email|xss_clean' );
		    $this->form_validation->set_rules( 'institution', 'Institution', 'required|max_length[100]|xss_clean' );
		}

		$this->form_validation->set_rules( 'phone', 'Phone', 'numeric|xss_clean|min_length[8]|max_length[15]');
		$this->form_validation->set_rules( 'event', 'Event', 'required|alpha_dash|xss_clean|callback_valid_event' );
		$this->form_validation->set_rules( 'password', 'Password', 'required|min_length[6]|max_length[50]|xss_clean' );

		$this->form_validation->set_rules( 'teamname', 'Team Name', 'required|xss_clean' );

		// these two are required just so that set_value() in the view selects the right value
		$this->form_validation->set_rules( 'da_student', 'DA Student', '' );
		$this->form_validation->set_rules( 'participant', 'Participant', 'required|max_length[100]|xss_clean' );

		$extra_rules = null;
		
        if( function_exists('validate_'.$event)&&$event!='techdefence' ) {
            $extra_rules = call_user_func('validate_'.$event, $this->form_validation);
        }	
		if( function_exists('validate_'.$event)&&$event=='techdefence' ) {
		if( $this->input->post('da_student')!=true ) {
		   $extra_rules = call_user_func('validate_'.$event, $this->form_validation);
		}
		}
		
		if ($extra_rules != null)
			foreach($extra_rules as $rule)
				$this->form_validation->set_rules( $rule[0], $rule[1], $rule[2] );
        // run custom per-event validation rules if any
		// make sure events in event list
		return $this->form_validation->run();
	}

    function get_email() {
        if( $this->input->post('da_student') )
            return $this->input->post('da_student_id') . "@daiict.ac.in" ;
        return $this->input->post('email');
    }

function index($event=NULL) {
        $success = false;
        $errormsg = "";
        $row = FALSE;

	if( $event == NULL && !$this->input->post('event') ) {
		$this->load->view('registermap');
		return;
	}

        $data = array();

		if( @file_exists(APPPATH."views/register/$event.php") ) {
			$data['event_view'] = $this->load->view( "register/$event", '', true );
		}

        if( $this->verify_form($event) == FALSE ) {
        }
        else {
            $row = $this->userexists( $this->get_email() );

            // if a new user, check the fields match
            if( $row === FALSE ) {
                $success = $this->input->post('password') === $this->input->post('confirm_password') ;
                if( !$success )
                    $errormsg = "Password and Confirm Password don't match";
            }
            else if( strcmp($row->password, md5($this->input->post('password'))) == 0 )
                $success = true;
            else
                $errormsg = "Wrong password";
        }

        if( $success ) {
            // userexists may be set, so we can extract information from there
	    $data = $this->finish_registration($row);
		if(  array_key_exists( $data['event'], $this->postprocess ) )
			$data['nextpage'] = $this->postprocess[$data['event']];

		$this->load->view( 'success', $data );
        }
        else {
            $data['errors'] = $errormsg;
	    $data['events'] = $GLOBALS['REGISTRATIONS'];
		$event = $event ? $event : $this->input->post( 'event' );
	    $data['selected_event'] = $event;
	    $data['event_name'] = isset( $GLOBALS['REGISTRATIONS'][$event] ) ? $GLOBALS['REGISTRATIONS'][$event] : "No such event" ;

		$this->load->view( 'register', $data );

        }

    }

    function finish_registration($row) {
        $data = array();
              $userexists = ($row !== FALSE);
        $email = $row ? $row->email : $this->get_email();
        $name = $row ? $row->name : $this->input->post('participant');
        $institution = $row ? $row->institution : $this->input->post('institution');
	$phone = $row ? $row->phone : $this->input->post('phone');
        if( $this->is_da_student() )
            $institution = 'da-iict';

        $pass = $this->input->post('password');
        $event = $this->input->post('event');
        $team = $this->input->post('teamname');
        $events_list = $this->user_events_list($email);

        // check if already registered
        if( array_search( $event, $events_list ) === FALSE ) {
            $data['already_registered'] = FALSE;
            array_push( $events_list, $event );
            $events_list = implode( ':', $events_list );

            // put the entry in the appropriate event table
            // we do this first, just so that in the extremely
            // unlikely case that someone manages to slip a bad event
            // we won't get fake entries in the main table
            $event_data = array(
                'email' => $email,
                'team' => $team );

	    if(isset($GLOBALS['event_'.$event])) {
		foreach( $GLOBALS['event_'.$event] as $event_field ) {
			if( $this->input->post($event_field) )
				$event_data[$event_field] = $this->input->post($event_field);
		}
	    }
            // $event is the table name!
            $this->db->insert( 'event_'.$event.'13', $event_data );

            // mark it up in the main table
            if( $userexists ) {
                $ins = array( 
			'events' => $events_list,
		    'accomodation' => $this->input->post('accomodation') ? 1 : 0,
		    'accomodation_count' => $this->input->post('accomodation') ? $this->input->post('accomodation_count') : 0 );
                $this->db->where('email', $email);
                $this->db->update( TABLE, $ins );
            }
            else {
                $ins = array(
                    'email' => $email,
                    'name' => $name,
                    'password' => md5($pass),
                    'institution' => $institution,
		    'phone' => $phone,
		    'accomodation' => $this->input->post('accomodation') ? 1 : 0,
		    'accomodation_count' => $this->input->post('accomodation') ? $this->input->post('accomodation_count') : 0 ,
                    'events' => $events_list );
                $this->db->insert(TABLE, $ins);
            }
        }
        else {
            $data['already_registered'] = TRUE;
        }

	// get the code
	$this->db->where( 'email', $email );
	$eventq = $this->db->get( 'event_'.$event.'13' ); // stupid PHP 4.x doesn't have chaining
	$eventrow = $eventq->row();
	$code = $eventrow->code;

        $data['email'] = $email;
        $data['name'] = $name;
        $data['event'] = $event;
        $data['team'] = $eventrow->team;
	$data['code'] = sprintf( "%s%03d", $event, $code);
        $data['all_events'] = array(); //$this->user_events_list($email);
	foreach( $this->user_events_list($email) as $evt )
		array_push( $data['all_events'], $GLOBALS['REGISTRATIONS'][$evt] );
        return $data;
    }

	function valid_request() {
		$da = $this->input->post('da_student');
		return true;
	}

	function is_da_student() {
		$da_student = $this->input->post('da_student');
		return $da_student == 'true';
	}

    // if user exists returns entire row
    // so check for === FALSE
    function userexists($email) {
		$this->load->database();
	$dat = array('email'=> $email);
	$this->db->where( $dat );
        $query = $this->db->get(TABLE);
        if( $query->num_rows() == 0 )
            return false;

        return $query->row();
    }

    // returns an array of { events } for $email
    function user_events_list($email) {
        $this->db->select('events');
        $query = $this->db->get_where(TABLE, array('email'=>$email));

        $events = array();
        if( $query->num_rows() > 0 ) {
		$r = $query->row();
            $evs = $r->events;
            if( strlen($evs) > 0 )
                $events = explode( ':', $evs );
        }
        return $events;
    }

	function ajaxuserexists() {
        header("Content-Type: application/json");
        $arr = array();

		if( $this->valid_request() ) {

			$out = "Welcome back ";
			$email = $this->input->post('email');
			if( $this->is_da_student() ) {
				$email = $this->input->post('da_student_id') . "@daiict.ac.in";
			}

		    $row = $this->userexists($email);
		    if( $row !== FALSE ) {
                $arr['available'] = FALSE;
				$out .= $row->name."<br>";

                if( strcmp($row->password, md5($this->input->post('password'))) == 0 ) {
                    $arr['success'] = TRUE;

                    $arr['name'] = $row->name;
                    $arr['phone'] = $row->phone;
                    $arr['institution'] = $row->institution;
                }
                else {
                    $arr['success'] = FALSE;
                    $out = "Wrong password";
                }
                $arr['notification'] = $out;
            }
			else {
                $arr['available'] = TRUE;
			}
		}
		else {
			$arr['error'] = $this->input->post('da_student');
		}

        $collapse = array();
        foreach( $arr as $k=>$v ) {
            //boolean values
            if( $k === "success" || $k === "available" ) {
                array_push( $collapse, '"'.$k.'":'.($v === TRUE ? 'true' 
                    : 'false' ) );
            }
            else {
                array_push( $collapse, '"'.$k.'":"'.$v.'"' );
            }
        }

        echo '{'.implode(',', $collapse).'}';
	}

    function valid_event($event) {
        if( array_search( $event, array_keys($GLOBALS['REGISTRATIONS']) ) === FALSE ) {
            $this->form_validation->set_message('valid_event', "No such event: $event" );
            return FALSE;
        }
        return TRUE;
    }
}
?>
