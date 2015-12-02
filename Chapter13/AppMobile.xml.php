<?php
<object class="AppMovil" name="AppMovil" baseclass="MPage">
<property name="DesignConfigName">Samsung Galaxy S II - Vertical (480x762)</property>
<property name="DesignConfigWidth">480</property>
<property name="DesignConfigHeight">762</property>
<property name="UseBackground">1</property>
  <property name="Animations">a:0:{}</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[Aplicaci&oacute;n m&oacute;vil]]></property>
  <property name="Font">
  <property name="Family">Helvetica, Arial, sans-serif</property>
  <property name="Size">16px</property>
  </property>
  <property name="Height">762</property>
  <property name="HiddenFields">a:0:{}</property>
  <property name="Name">AppMovil</property>
  <property name="Theme">MobileTheme2</property>
  <property name="ViewportScale">50</property>
  <property name="Width">480</property>
  <property name="jsOnAjaxCallComplete">AppMovilAjaxCallComplete</property>
  <object class="MCollapsibleSet" name="MCollapsibleSet1" >
    <property name="ActiveLayer">Lista de tareas</property>
    <property name="Animations">a:0:{}</property>
    <property name="Height">491</property>
    <property name="Left">2</property>
    <property name="Name">MCollapsibleSet1</property>
    <property name="Panels"><![CDATA[a:2:{i:0;s:15:&quot;Lista de tareas&quot;;i:1;s:11:&quot;Nueva tarea&quot;;}]]></property>
    <property name="Top">66</property>
    <property name="Width">477</property>
    <object class="MCheckBox" name="MCheckBox1" >
      <property name="Animations">a:0:{}</property>
      <property name="Caption">Completada</property>
      <property name="Height">43</property>
      <property name="Layer">Lista de tareas</property>
      <property name="Left">177</property>
      <property name="Name">MCheckBox1</property>
      <property name="Top">200</property>
      <property name="Width">200</property>
      <property name="jsOnClick">MCheckBox1Click</property>
    </object>
    <object class="MTextArea" name="MTextArea1" >
      <property name="Animations">a:0:{}</property>
      <property name="Height">121</property>
      <property name="Layer">Lista de tareas</property>
      <property name="Left">14</property>
      <property name="Lines">a:0:{}</property>
      <property name="Name">MTextArea1</property>
      <property name="Top">256</property>
      <property name="Width">363</property>
    </object>
    <object class="MLabel" name="MLabel4" >
      <property name="Animations">a:0:{}</property>
      <property name="Caption"><![CDATA[Descripci&oacute;n]]></property>
      <property name="Font">
      <property name="Family">Helvetica, Arial, sans-serif</property>
      <property name="Size">16px</property>
      </property>
      <property name="Height">20</property>
      <property name="Layer">Lista de tareas</property>
      <property name="Left">13</property>
      <property name="Name">MLabel4</property>
      <property name="Top">223</property>
      <property name="Width">91</property>
    </object>
    <object class="MLabel" name="MLabel3" >
      <property name="Animations">a:0:{}</property>
      <property name="Caption"><![CDATA[Duraci&oacute;n]]></property>
      <property name="Font">
      <property name="Family">Helvetica, Arial, sans-serif</property>
      <property name="Size">16px</property>
      </property>
      <property name="Height">20</property>
      <property name="Layer">Lista de tareas</property>
      <property name="Left">13</property>
      <property name="Name">MLabel3</property>
      <property name="Top">156</property>
      <property name="Width">75</property>
    </object>
    <object class="MSlider" name="MSlider1" >
      <property name="Animations">a:0:{}</property>
      <property name="Height">43</property>
      <property name="Layer">Lista de tareas</property>
      <property name="Left">102</property>
      <property name="Name">MSlider1</property>
      <property name="Top">145</property>
      <property name="Width">275</property>
    </object>
    <object class="MEdit" name="MEdit1" >
      <property name="Animations">a:0:{}</property>
      <property name="DataList">DataList1</property>
      <property name="Height">43</property>
      <property name="Layer">Lista de tareas</property>
      <property name="Left">227</property>
      <property name="Name">MEdit1</property>
      <property name="Top">68</property>
      <property name="Width">150</property>
    </object>
    <object class="MDateTimePicker" name="MDateTimePicker1" >
      <property name="Animations">a:0:{}</property>
      <property name="Height">43</property>
      <property name="Layer">Lista de tareas</property>
      <property name="Left">13</property>
      <property name="Name">MDateTimePicker1</property>
      <property name="Top">68</property>
      <property name="Value"></property>
      <property name="Width">150</property>
    </object>
    <object class="MLabel" name="MLabel2" >
      <property name="Animations">a:0:{}</property>
      <property name="Caption">Tipo</property>
      <property name="Font">
      <property name="Family">Helvetica, Arial, sans-serif</property>
      <property name="Size">16px</property>
      </property>
      <property name="Height">20</property>
      <property name="Layer">Lista de tareas</property>
      <property name="Left">227</property>
      <property name="Name">MLabel2</property>
      <property name="Top">45</property>
      <property name="Width">75</property>
    </object>
    <object class="MLabel" name="MLabel1" >
      <property name="Animations">a:0:{}</property>
      <property name="Caption">Fecha</property>
      <property name="Font">
      <property name="Family">Helvetica, Arial, sans-serif</property>
      <property name="Size">16px</property>
      </property>
      <property name="Height">20</property>
      <property name="Layer">Lista de tareas</property>
      <property name="Left">13</property>
      <property name="Name">MLabel1</property>
      <property name="Top">44</property>
      <property name="Width">75</property>
    </object>
    <object class="DataList" name="DataList1" >
            <property name="Left">420</property>
            <property name="Top">326</property>
      <property name="Items"><![CDATA[a:5:{s:7:&quot;Trabajo&quot;;s:7:&quot;Trabajo&quot;;s:8:&quot;Estudios&quot;;s:8:&quot;Estudios&quot;;s:9:&quot;Dom&eacute;stico&quot;;s:9:&quot;Dom&eacute;stico&quot;;s:5:&quot;Otros&quot;;s:5:&quot;Otros&quot;;s:0:&quot;&quot;;s:0:&quot;&quot;;}]]></property>
      <property name="Name">DataList1</property>
    </object>
    <object class="MButton" name="MButton1" >
      <property name="Animations">a:0:{}</property>
      <property name="Caption">Crear</property>
      <property name="Height">43</property>
      <property name="Layer">Lista de tareas</property>
      <property name="Left">315</property>
      <property name="Name">MButton1</property>
      <property name="Top">384</property>
      <property name="Width">150</property>
    </object>
  </object>
  <object class="MPanel" name="MPanel1" >
    <property name="Animations">a:0:{}</property>
    <property name="Color">#CCCCFF</property>
    <property name="Height">59</property>
    <property name="Name">MPanel1</property>
    <property name="ParentColor">0</property>
    <property name="Width">479</property>
    <object class="MToolBar" name="MToolBar1" >
      <property name="Animations">a:0:{}</property>
      <property name="Height">57</property>
      <property name="Items"><![CDATA[a:3:{i:0;a:7:{s:7:&quot;Caption&quot;;s:5:&quot;Atr&aacute;s&quot;;s:4:&quot;Link&quot;;s:1:&quot;#&quot;;s:10:&quot;SystemIcon&quot;;s:6:&quot;siBack&quot;;s:4:&quot;Icon&quot;;s:0:&quot;&quot;;s:6:&quot;NoAjax&quot;;s:5:&quot;false&quot;;s:10:&quot;Transition&quot;;s:0:&quot;&quot;;s:10:&quot;OpenDialog&quot;;s:5:&quot;false&quot;;}i:1;a:7:{s:7:&quot;Caption&quot;;s:10:&quot;Pendientes&quot;;s:4:&quot;Link&quot;;s:14:&quot;Pendientes.php&quot;;s:10:&quot;SystemIcon&quot;;s:6:&quot;siHome&quot;;s:4:&quot;Icon&quot;;s:0:&quot;&quot;;s:6:&quot;NoAjax&quot;;s:5:&quot;false&quot;;s:10:&quot;Transition&quot;;s:5:&quot;trPop&quot;;s:10:&quot;OpenDialog&quot;;s:5:&quot;false&quot;;}i:2;a:7:{s:7:&quot;Caption&quot;;s:5:&quot;Nueva&quot;;s:4:&quot;Link&quot;;s:1:&quot;#&quot;;s:10:&quot;SystemIcon&quot;;s:6:&quot;siPlus&quot;;s:4:&quot;Icon&quot;;s:0:&quot;&quot;;s:6:&quot;NoAjax&quot;;s:5:&quot;false&quot;;s:10:&quot;Transition&quot;;s:0:&quot;&quot;;s:10:&quot;OpenDialog&quot;;s:5:&quot;false&quot;;}}]]></property>
      <property name="Left">2</property>
      <property name="Name">MToolBar1</property>
      <property name="Theme">MobileTheme2</property>
      <property name="Top">2</property>
      <property name="Width">476</property>
    </object>
  </object>
  <object class="MPageExtraEvents" name="MPageExtraEvents1" >
        <property name="Left">407</property>
        <property name="Top">199</property>
    <property name="Name">MPageExtraEvents1</property>
    <property name="jsOnBackButton">MPageExtraEvents1BackButton</property>
  </object>
  <object class="MobileTheme" name="MobileTheme1" >
        <property name="Left">10</property>
        <property name="Top">17</property>
    <property name="ColorVariation">cvCustom</property>
    <property name="CustomColorVariation">b</property>
    <property name="CustomTheme">TermaMovil.css</property>
    <property name="Name">MobileTheme1</property>
    <property name="Theme">thCustom</property>
  </object>
  <object class="MobileTheme" name="MobileTheme2" >
        <property name="Left">5</property>
        <property name="Top">76</property>
    <property name="Name">MobileTheme2</property>
  </object>
  <object class="MPageEvents" name="MPageEvents1" >
        <property name="Left">414</property>
        <property name="Top">269</property>
    <property name="Name">MPageEvents1</property>
    <property name="jsOnDeviceReady">MPageEvents1DeviceReady</property>
  </object>
  <object class="MCamera" name="MCamera1" >
        <property name="Left">416</property>
        <property name="Top">355</property>
    <property name="Name">MCamera1</property>
    <property name="jsOnSuccess">MCamera1Success</property>
  </object>
</object>
?>
