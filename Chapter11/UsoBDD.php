<?php
require_once("rpcl/rpcl.inc.php");
require_once("dmBiblioteca.php");
//Includes
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");
use_unit("dbtables.inc.php");
use_unit("db.inc.php");
use_unit("dbctrls.inc.php");
use_unit("pager.inc.php");

//Class definition
class Page6 extends Page
{
    public $Label2 = null;
    public $Label1 = null;
    public $Pager1 = null;
    public $LIBROS1 = null;
}

global $application;

global $Page6;

//Creates the form
$Page6=new Page6($application);

//Read from resource file
$Page6->loadResource(__FILE__);

//Shows the form
$Page6->show();

?>