<?
//Nilesh Suthar
require("registrations_array.php");
//define("TABLE", "synapse");
class create_table extends Controller{
		function Page()
	{
		parent::Controller();	
	}
function index()
	{
/*
Commented as db already created
				$this->load->database();
		foreach( $GLOBALS['REGISTRATIONS'] as $k=>$event_field ) {
			if($k=='algorythmus'||$k=='aoe'||$k=='codemutants'||$k=='counterstrike'||$k=='dota'||$k=='footloose'||$k=='hiphopstreet'||$k=='inc_edit_member'||$k=='quake3'||$k=='rekriti'||$k=='rhapsody'||$k=='shiamak_workshop')
			continue;
			$q="CREATE TABLE `event_$k"."13` (  `code` int(11) NOT NULL auto_increment,  `email` varchar(255) default NULL,  `team` varchar(255) default NULL,  `category` varchar(60) default NULL,  PRIMARY KEY  (`code`)) ENGINE=MyISAM DEFAULT CHARSET=latin1;";
		if($this->db->query($q))
		echo $k.' done<br>';
		else 
		echo mysql_error();
		}
$q="CREATE TABLE `event_algorythmus13` (
  `code` int(11) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL default '',
  `team` varchar(255) default NULL,
  `codechef_username` varchar(255) default NULL,
  PRIMARY KEY  (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `event_aoe13` (
  `code` int(11) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL default '',
  `team` varchar(255) default NULL,
  `tm2` varchar(100) default NULL,
  `tm3` varchar(100) default NULL,
  PRIMARY KEY  (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `event_codemutants13` (
  `code` int(11) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL default '',
  `team` varchar(255) default NULL,
  `codechef_username` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `event_counterstrike13` (
  `code` int(11) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL default '',
  `team` varchar(255) default NULL,
  `tm2` varchar(100) default NULL,
  `tm2_college` varchar(100) default NULL,
  `tm3` varchar(100) default NULL,
  `tm3_college` varchar(100) default NULL,
  `tm4` varchar(100) default NULL,
  `tm4_college` varchar(100) default NULL,
  `tm5` varchar(100) default NULL,
  `tm5_college` varchar(100) default NULL,
  PRIMARY KEY  (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `event_dota13` (
  `code` int(11) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL default '',
  `team` varchar(255) default NULL,
  `tm2` varchar(100) default NULL,
  `tm2_college` varchar(100) default NULL,
  `tm3` varchar(100) default NULL,
  `tm3_college` varchar(100) default NULL,
  `tm4` varchar(100) default NULL,
  `tm4_college` varchar(100) default NULL,
  `tm5` varchar(100) default NULL,
  `tm5_college` varchar(100) default NULL,
  PRIMARY KEY  (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `event_footloose13` (
  `code` int(11) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL default '',
  `team` varchar(255) default NULL,
  `category` varchar(100) default NULL,
  PRIMARY KEY  (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `event_hiphopstreet13` (
  `code` int(11) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL default '',
  `team` varchar(255) NOT NULL default '',
  `category` varchar(20) default NULL,
  PRIMARY KEY  (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `event_quake313` (
  `code` int(11) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL default '',
  `team` varchar(255) default NULL,
  `tm2` varchar(100) default NULL,
  `tm2_college` varchar(100) default NULL,
  `tm3` varchar(100) default NULL,
  `tm3_college` varchar(100) default NULL,
  `tm4` varchar(100) default NULL,
  `tm4_college` varchar(100) default NULL,
  PRIMARY KEY  (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `event_rekriti13` (
  `code` int(11) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL default '',
  `team` varchar(255) default NULL,
  `year_of_ed` varchar(20) default NULL,
  `idea_number` int(11) default NULL,
  `rekriti_type` varchar(25) default NULL,
  PRIMARY KEY  (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `event_rhapsody13` (
  `code` int(11) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL default '',
  `team` varchar(255) default NULL,
  `category` varchar(100) default NULL,
  PRIMARY KEY  (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `event_shiamak_workshop13` (
  `code` int(11) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL default '',
  `team` varchar(255) NOT NULL default '',
  `dance_form` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";	
	
	
	//add $q using sql query window
	//$this->db->query($q);
	*/
	}
}
?>