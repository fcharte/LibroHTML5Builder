<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//Class definition
class Page10 extends Page
{
    public $Button1 = null;
}

global $application;

global $Page10;

//Creates the form
$Page10=new Page10($application);

$Page10->isclientpage=true;

//Read from resource file
$Page10->loadResource(__FILE__);

$Page10->TemplateEngine='RPCLTemplate';
$Page10->TemplateFilename='JavaScript.html';
//Shows the form
$Page10->show();
