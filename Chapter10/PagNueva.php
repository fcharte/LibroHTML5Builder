<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//Class definition
class PagNueva extends Page
{
    public $Label1 = null;
    public $Button1 = null;
    public $Button2 = null;
    function Button1JSClick($sender, $params)
    {
        ?>
        //begin js
            history.back();
        //end
        <?php
    }
}

global $application;

global $PagNueva;

//Creates the form
$PagNueva=new PagNueva($application);

//Read from resource file
$PagNueva->loadResource(__FILE__);

//Shows the form
$PagNueva->show();

?>