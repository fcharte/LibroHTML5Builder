<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("jquerymobile/forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");
use_unit("jquerymobile/jmobile.inc.php");
use_unit("jquerymobile/phonegap.inc.php");

//Class definition
class MPage10 extends MPage
{
    public $MShape1 = null;
    public $MButton1 = null;
    public $MAccelerometer1 = null;
}

global $application;

global $MPage10;

//Creates the form
$MPage10=new MPage10($application);

$MPage10->isclientpage=true;

//Read from resource file
$MPage10->loadResource(__FILE__);

//Shows the form
$MPage10->show();
