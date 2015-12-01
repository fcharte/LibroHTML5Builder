<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");
use_unit("auth.inc.php");
use_unit("Zend/zauth.inc.php");
use_unit("Zend/zfile.inc.php");
use_unit("Zend/zdate.inc.php");
use_unit("pager.inc.php");
use_unit("imglist.inc.php");

//Class definition
class PaginaInicio extends Page
{
    public $ImageList1 = null;
    public $Pager1 = null;
    public $Button3 = null;
    public $Button1 = null;
    public $Panel1 = null;
    public $Button2 = null;
    function Button1Click($sender, $params)
    {
      $this->Panel1->ActiveLayer = "1";

    }
    function Button1JSClick($sender, $params)
    {
        ?>
        //begin js
        alert('Botón pulsado');
        //end
        <?php
    }
    function Button2Click($sender, $params)
    {
        foreach(get_object_vars($this) as $nombre => $valor)
          print "<li>".$nombre; // ." = ".$valor;
    }
}

global $application;

global $PaginaInicio;

//Creates the form
$PaginaInicio=new PaginaInicio($application);

//Read from resource file
$PaginaInicio->loadResource(__FILE__);

//Shows the form
$PaginaInicio->show();

?>