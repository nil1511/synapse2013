<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('register_link'))
{
    function register_link() {
        $event = str_replace("/event/", "", uri_string());
        foreach($GLOBALS["REGISTRATIONS"] as $k=>$v) {
            if( $event == $k ) {
                return anchor_popup('register/'.$event, "Register for {$GLOBALS["REGISTRATIONS"][$event]}");
            }
        }
    }
}
?>
