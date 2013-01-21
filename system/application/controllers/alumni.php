<?php

define("TABLE", "synapse2013_alumni");
class Alumni extends Controller {

    function verify_form() {
		$this->load->library( 'form_validation' );
        $this->form_validation->set_rules( 'name', 'Name', 'required|xss_clean' );
        $this->form_validation->set_rules( 'email', 'E-Mail', 'required|valid_email|xss_clean' );
        $this->form_validation->set_rules( 'phone', 'Telephone', 'required|xss_clean' );
        $this->form_validation->set_rules( 'address', 'Current Address', 'required|xss_clean' );
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
        $this->load->view('alumni', $data);
    }

	function insert_details() {
		$this->load->database();
        $data = array(
            'name' => $this->input->post('name')
            , 'email' => $this->input->post('email')
            , 'phone' => $this->input->post('phone')
            , 'address' => $this->input->post('address')
            , 'tsize' => $this->input->post('tsize')
        );
        return $this->db->insert(TABLE, $data);
	}
}
?>
