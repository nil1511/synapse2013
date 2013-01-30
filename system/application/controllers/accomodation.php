<?php

define("TABLE", "synapse2013_acco");
class Accomodation extends Controller {
    function verify_form() {
		$this->load->library( 'form_validation' );
        $this->form_validation->set_rules( 'name', 'Name', 'required|xss_clean' );
        $this->form_validation->set_rules( 'email', 'E-Mail', 'required|valid_email|xss_clean' );
        $this->form_validation->set_rules( 'phone', 'Telephone', 'required|xss_clean' );
        $this->form_validation->set_rules( 'institute', 'Institute', 'required|xss_clean' );
        $this->form_validation->set_rules( 'persons', 'How many people?', 'required|numeric|xss_clean' );
        $this->form_validation->set_rules( 'days', 'How many days?', 'required|numeric|xss_clean');
		return $this->form_validation->run();
	}

	function index() {
	
	$this->load->helper( array('form', 'url') );
	
        $data = array();
        $data['errors'] = "";
		$data['success'] = FALSE;

        if( $this->verify_form() == FALSE ) {
        }
        else {
            if( $this->insert_details() )
                $data['success'] = TRUE;
            else {
                $data['errors'] = 'You have already registered!';
            }
        }
        $this->load->view('accomodation', $data);
    }

	function insert_details() {
		$this->load->database();
        $data = array(
            'name' => $this->input->post('name')
            , 'email' => $this->input->post('email')
            , 'phone' => $this->input->post('phone')
            , 'institute' => $this->input->post('institute')
            , 'persons' => $this->input->post('persons')
            , 'days' => $this->input->post('days')
        );
        return $this->db->insert(TABLE, $data);
	}
}
?>