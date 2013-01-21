<?php

define("TABLE", "synapse2013_registration");
class Changepassword extends Controller {

    function verify_form() {
		$this->load->library( 'form_validation' );
        $this->form_validation->set_rules( 'email', 'E-Mail', 'required|valid_email|xss_clean' );

	$this->form_validation->set_rules( 'oldpassword', 'Old Password', 'required|xss_clean|callback_correct_oldpass' );
	$this->form_validation->set_message( 'correct_oldpass', 'Error: Make sure email and old password are correct!' );

	$this->form_validation->set_rules( 'newpassword', 'New Password', 'required|min_length[6]|max_length[50]|matches[confirmnewpassword]|xss_clean' );
	$this->form_validation->set_rules( 'confirmnewpassword', 'Confirm New Password', 'required|min_length[6]|max_length[50]');
		return $this->form_validation->run();
	}

	function index() {
        $data = array();
	$data['errors'] = "";

        if( $this->verify_form() == FALSE ) {
        }
        else {
		$this->change_password( $this->input->post('email'), $this->input->post('newpassword') );
		$data['success'] = TRUE;
        }
        $this->load->view('changepassword', $data);
    }

	function correct_oldpass($oldpass) {
		$this->load->database();
		$data = array( 'email' => $this->input->post( 'email' ),
				'password' => md5($oldpass) );
		$this->db->where( $data );
		$query = $this->db->get( TABLE );
		if( $query->num_rows() <= 0 )
			return FALSE;
		return TRUE;
	}

	function change_password( $email, $newpass ) {
		$this->load->database();
		$this->db->where( 'email', $email );
		$this->db->update( TABLE, array( 'password' => md5($newpass) ) );
	}

}
?>
