<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");
use_unit("dbtables.inc.php");
use_unit("db.inc.php");

//Class definition
class DataModule1 extends DataModule
{
    public $dsLIBROS1 = null;
    public $tbLIBROS1 = null;
    public $dbmicros1 = null;
}

global $application;

global $DataModule1;

//Creates the form
$DataModule1=new DataModule1($application);

//Read from resource file
$DataModule1->loadResource(__FILE__);

?>