<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");
use_unit("auth.inc.php");
use_unit("Zend/zacl.inc.php");

//Class definition
class EntradaApp extends Page
{
    public $Label1 = null;
    public $Label2 = null;
    public $lblNombre = null;
    public $BasicAuthentication1 = null;
    function EntradaAppBeforeShow($sender, $params)
    {
        $this->BasicAuthentication1->Execute();
    }
    function BasicAuthentication1Authenticate($sender, $params)
    {
        $usuario = $params['username'];
        $contraseña = $params['password'];

        if($usuario != 'HTML5') {
          $this->BasicAuthentication1->ErrorMessage = 'Usuario inexistente';
          return false;
        }

        if($contraseña != 'Builder') {
          $this->BasicAuthentication1->ErrorMessage = 'Contraseña inválida';
          return false;
        }

        $this->lblNombre->Caption = $usuario;
        return true;
    }
}

global $application;

global $EntradaApp;

//Creates the form
$EntradaApp=new EntradaApp($application);

//Read from resource file
$EntradaApp->loadResource(__FILE__);

//Shows the form
$EntradaApp->show();

?>