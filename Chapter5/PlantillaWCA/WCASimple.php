<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");
use_unit("comctrls.inc.php");
use_unit("styles.inc.php");

//Class definition
class WCAPage extends Page
{
    public $Descripcion1 = null;
    public $Tiempo1 = null;
    public $Fecha1 = null;
    public $Fecha = null;
    public $Tipo = null;
    public $Duracion = null;
    public $Descripcion = null;
    public $Crear = null;
    public $ListaTipos = null;
    public $StyleSheet1 = null;
}

global $application;

global $WCAPage;

//Creates the form
$WCAPage=new WCAPage($application);

$WCAPage->isclientpage=true;

//Read from resource file
$WCAPage->loadResource(__FILE__);

$WCAPage->TemplateEngine='RPCLTemplate';
$WCAPage->TemplateFilename='WCASimple.html';
//Shows the form
$WCAPage->show();
