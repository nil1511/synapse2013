<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

include_once("registrations_array.php");
class Page extends Controller {

	function Page()
	{
		parent::Controller();	
		
		$this->load->helper('url');
	}
	
	function index()
	{
		$this->start_main_page($this->load->view('main_page', '', true));
	}
	
	function start_main_page($view)
	{
		$page = array();
		$page["tarot_technical"] =  $this->load->view('tarots/technical', '',true);
		$page["tarot_cultural"] =  $this->load->view('tarots/cultural', '',true);
		$page["tarot_online"] =  $this->load->view('tarots/online', '',true);
		$page["tarot_workshop"] =  $this->load->view('tarots/workshop', '',true);
		
		$page["technicalOverlay"] =  $this->load->view('appleOverlays/technical', '',true);
		$page["culturalOverlay"] =  $this->load->view('appleOverlays/cultural', '',true);
		$page["sponsorsContent"] =  $this->load->view('sponsors/sponsors', '',true);
		$page["contacts"] = $this->load->view('contact/contacts', '',true);
        $page["title"] = "Synapse 2013";
        $page["includes"] = $this->load->view('includes', '', true);
        $page["main_page"] = $view;
		$page["registermap"] = $this->load->view('registermap', '', true);
		$page["footer"] = $this->load->view('footer', '', true);
        $this->load->view("main_page", $page);
	}
	
	// Handling of different events
	
	function event($event_name = null)
	{
		$this->load->helper("registerlink");
		$this->start_event_page($this->load->view('event/' . $event_name, '', true), $event_name);
	}
	function start_event_page($event_body, $title)
	{
		$page = array();
		$page["event_body"] = $event_body;
		$page["event_title"] = $GLOBALS['REGISTRATIONS'][$title];
		$page["footer"] = $this->load->view('footer', '', true);
		
		$this->load->view('event_page', $page);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */