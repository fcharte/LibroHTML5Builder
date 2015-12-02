<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");
use_unit("comctrls.inc.php");
use_unit("styles.inc.php");

//Class definition
class TareasWSA extends Page
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

global $TareasWSA;

//Creates the form
$TareasWSA=new TareasWSA($application);

//Read from resource file
$TareasWSA->loadResource(__FILE__);

//Shows the form
$TareasWSA->show();

?>