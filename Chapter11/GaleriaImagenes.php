<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");
use_unit("styles.inc.php");

//Class definition
class Galeria extends Page
{
    public $StyleSheet1 = null;
    public $Panel1 = null;
    private $contador;
    public $Upload1 = null;
    public $Edit1 = null;
    public $Button1 = null;

    function GaleriaCreate($sender, $params)
    {
        echo '<p style="height: 64px"></p>';
        $this->contador = 1;
        $ruta = realpath('./imagenes');
        $archivos = glob($ruta.'./{*.jpg,*.gif,*.png}', GLOB_BRACE);
        foreach($archivos as $archivo) {
          $descripcion = $this->leeDescripcion($archivo);
          $this->creaImagen($archivo, $descripcion);
        }
    }

    function Button1Click($sender, $params)
    {
        if($this->Upload1->isUploadedFile()) {
           $destino = realpath('./imagenes')
                .'/'.$this->Upload1->Filename;

           $this->Upload1->moveUploadedFile($destino);
           file_put_contents($destino.'.txt', $this->Edit1->Text);
        }
    }

    function creaImagen($archivo, $descripcion) {
       echo '<img style="width: 120px; height: 160px; margin: 10px" id="'.
            'Imagen'.$this->contador.'" '.
            'src="imagenes/'.basename($archivo).'" '.
            'title="'.$descripcion.'" '.
            '/>';

       $this->contador++;
    }

    function leeDescripcion($archivo) {
       $archDescripcion = $archivo.'.txt';
       if(file_exists($archDescripcion))
          $descripcion = file_get_contents($archDescripcion);
       else
          $descripcion = 'Sin descripción';

       return $descripcion;
    }
}

global $application;

global $Galeria;

//Creates the form
$Galeria=new Galeria($application);

//Read from resource file
$Galeria->loadResource(__FILE__);

//Shows the form
$Galeria->show();

?>