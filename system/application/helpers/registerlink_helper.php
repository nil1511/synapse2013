<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('register_link'))
{
    function register_link() {
        $event = str_replace("/event/", "", uri_string());
        foreach($GLOBALS["REGISTRATIONS"] as $k=>$v) {
            if( $event == $k ) {
                return anchor('register/'.$event, "Click Here to Register for {$GLOBALS["REGISTRATIONS"][$event]}",array('class' => 'registerbutton','target' => '_blank'));
            }
        }
    }
}
?>
