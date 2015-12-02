<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");
use_unit("comctrls.inc.php");

//Class definition
class Paneles extends Page
{
    public $Panel1 = null;
    public $Label1 = null;
    public $Label2 = null;
    public $DateTimePicker1 = null;
    public $Label3 = null;
    public $Button1 = null;
    public $Button2 = null;
    function Button1Click($sender, $params)
    {
        $this->Panel1->ActiveLayer = $sender->Tag; // 'Capa1';
    }
}

global $application;

global $Paneles;

//Creates the form
$Paneles=new Paneles($application);

//Read from resource file
$Paneles->loadResource(__FILE__);

//Shows the form
$Paneles->show();

?>