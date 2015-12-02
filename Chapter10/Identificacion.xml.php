<?php
<object class="EntradaApp" name="EntradaApp" baseclass="Page">
  <property name="Animations">a:0:{}</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[Entrada a la aplicaci&oacute;n]]></property>
  <property name="Height">370</property>
  <property name="HiddenFields">a:0:{}</property>
  <property name="Name">EntradaApp</property>
  <property name="Width">597</property>
  <property name="OnBeforeShow">EntradaAppBeforeShow</property>
  <object class="Label" name="Label1" >
    <property name="Animations">a:0:{}</property>
    <property name="Caption"><![CDATA[Identificaci&oacute;n satisfactoria]]></property>
    <property name="Font">
    <property name="Size">36pt</property>
    </property>
    <property name="Height">75</property>
    <property name="Left">11</property>
    <property name="Name">Label1</property>
    <property name="ParentFont">0</property>
    <property name="Top">24</property>
    <property name="Width">574</property>
  </object>
  <object class="Label" name="Label2" >
    <property name="Animations">a:0:{}</property>
    <property name="Caption">Bienvenido</property>
    <property name="Height">13</property>
    <property name="Left">48</property>
    <property name="Name">Label2</property>
    <property name="Top">128</property>
    <property name="Width">75</property>
  </object>
  <object class="Label" name="lblNombre" >
    <property name="Animations">a:0:{}</property>
    <property name="Caption">lblNombre</property>
    <property name="Font">
    <property name="Weight">bold</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">128</property>
    <property name="Name">lblNombre</property>
    <property name="ParentFont">0</property>
    <property name="Top">128</property>
    <property name="Width">75</property>
  </object>
  <object class="BasicAuthentication" name="BasicAuthentication1" >
        <property name="Left">103</property>
        <property name="Top">195</property>
    <property name="ErrorMessage"><![CDATA[No tiene autorizaci&oacute;n para acceder a esta aplicaci&oacute;n]]></property>
    <property name="Name">BasicAuthentication1</property>
    <property name="Title"><![CDATA[Identificaci&oacute;n]]></property>
    <property name="OnAuthenticate">BasicAuthentication1Authenticate</property>
  </object>
</object>
?>
