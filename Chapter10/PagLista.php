<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//Class definition
class PagLista extends Page
{
    public $Label1 = null;
    public $Button1 = null;
    function Button1Click($sender, $params)
    {
        redirect('PagNueva.php');
    }
}

global $application;

global $PagLista;

//Creates the form
$PagLista=new PagLista($application);

//Read from resource file
$PagLista->loadResource(__FILE__);

//Shows the form
$PagLista->show();

?>