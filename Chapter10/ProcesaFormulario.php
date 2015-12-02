<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");
use_unit("comctrls.inc.php");

//Class definition
class NuevaEntrada extends Page
{
    public $Button1 = null;
    public $Mensaje = null;
    public $Label1 = null;
    public $Fecha = null;
    public $Tipo = null;
    public $ListaTipos = null;
    public $Duracion = null;
    public $Descripcion = null;
    function Button1Click($sender, $params)
    {
        $this->Mensaje->Caption =
          'Creada tarea de tipo '.$this->Tipo->Text.
          ' para el '.$this->Fecha->Value.
          ' con descripción "'.$this->Descripcion->Text.'"';

    }
    function Button1JSClick($sender, $params)
    {
        echo $this->Button1->ajaxCall('Button1Click',null,Array('Mensaje'));
        ?>
        //begin js
          $('#Mensaje').html('Esperando respuesta AJAX ...');
          return false;
        //end
        <?php
    }
}

global $application;

global $NuevaEntrada;

//Creates the form
$NuevaEntrada=new NuevaEntrada($application);

//Read from resource file
$NuevaEntrada->loadResource(__FILE__);

//Shows the form
$NuevaEntrada->show();

?>