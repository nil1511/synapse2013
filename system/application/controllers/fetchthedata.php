<?php

class Fetchthedata extends Controller {
    function events($jsonp) {
        $json = $this->load->view("events.json", '', TRUE);
        if( $jsonp && ctype_alnum($jsonp) )
            $this->jsona( "$jsonp( $json );", "text/javascript" );
        else
            $this->jsona( $json );
    }

    function title() {
        $this->load->helper("url");
        $prefix = "Synapse Nova";
        $sep = ' / ';

        $crumbs = split( '/', current_url() );

        //return join( $sep, array( $prefix, join( $sep, $crumbs ) ) );
        // currently puts last one only
        return join( $sep, array( $prefix, array_pop( $crumbs ) ) );
    }

    function jsona( $view, $type ) {
        //header("X-Title: " . $this->title());
        header("Content-Type: " . ($type ? $type : "application/json"));
        echo ($view);

    }
}
?>
