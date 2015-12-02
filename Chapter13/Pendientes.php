<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("jquerymobile/forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");
use_unit("jquerymobile/jmobile.inc.php");

//Class definition
class MPage1 extends MPage
{
    public $MToolBar1 = null;
}

global $application;

global $MPage1;

//Creates the form
$MPage1=new MPage1($application);

$MPage1->isclientpage=true;

//Read from resource file
$MPage1->loadResource(__FILE__);

//Shows the form
$MPage1->show();
