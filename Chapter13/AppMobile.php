<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("jquerymobile/forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");
use_unit("jquerymobile/jmobile.inc.php");
use_unit("jquerymobile/phonegap.inc.php");

//Class definition
class AppMovil extends MPage
{
    public $MCollapsibleSet1 = null;
    public $MCheckBox1 = null;
    public $MTextArea1 = null;
    public $MLabel4 = null;
    public $MLabel3 = null;
    public $MSlider1 = null;
    public $MEdit1 = null;
    public $MDateTimePicker1 = null;
    public $MLabel2 = null;
    public $MLabel1 = null;
    public $DataList1 = null;
    public $MButton1 = null;
    public $MPanel1 = null;
    public $MToolBar1 = null;
    public $MPageExtraEvents1 = null;
    public $MobileTheme1 = null;
    public $MobileTheme2 = null;
    public $MPageEvents1 = null;
    public $MCamera1 = null;
}

global $application;

global $AppMovil;

//Creates the form
$AppMovil=new AppMovil($application);

$AppMovil->isclientpage=true;

//Read from resource file
$AppMovil->loadResource(__FILE__);

//Shows the form
$AppMovil->show();
