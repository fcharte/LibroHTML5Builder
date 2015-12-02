<?php
<object class="Galeria" name="Galeria" baseclass="Page">
  <property name="Animations">a:0:{}</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[Galer&iacute;a de im&aacute;genes]]></property>
  <property name="Height">370</property>
  <property name="HiddenFields"><![CDATA[a:1:{s:11:&quot;numImagenes&quot;;s:1:&quot;0&quot;;}]]></property>
  <property name="Name">Galeria</property>
  <property name="Width">597</property>
  <property name="OnStartBody">GaleriaCreate</property>
  <object class="Panel" name="Panel1" >
    <property name="Animations">a:0:{}</property>
    <property name="AutoSize">1</property>
    <property name="Caption">Panel1</property>
    <property name="Height">43</property>
    <property name="Layout">
    <property name="Type">FLOW_LAYOUT</property>
    </property>
    <property name="Left">6</property>
    <property name="Name">Panel1</property>
    <property name="Top">7</property>
    <property name="Width">583</property>
    <object class="Upload" name="Upload1" >
      <property name="Accept">image/*</property>
      <property name="Animations">a:0:{}</property>
      <property name="Height">21</property>
      <property name="Left">13</property>
      <property name="Name">Upload1</property>
      <property name="Top">6</property>
      <property name="Width">260</property>
    </object>
    <object class="Edit" name="Edit1" >
      <property name="Animations">a:0:{}</property>
      <property name="Height">21</property>
      <property name="Left">283</property>
      <property name="Name">Edit1</property>
      <property name="PlaceHolder"><![CDATA[Descripci&oacute;n de la imagen]]></property>
      <property name="Top">2</property>
      <property name="Width">203</property>
    </object>
    <object class="Button" name="Button1" >
      <property name="Animations">a:0:{}</property>
      <property name="Caption">Enviar</property>
      <property name="Height">25</property>
      <property name="Left">487</property>
      <property name="Name">Button1</property>
      <property name="Top">4</property>
      <property name="Width">80</property>
      <property name="OnClick">Button1Click</property>
    </object>
  </object>
  <object class="StyleSheet" name="StyleSheet1" >
        <property name="Left">506</property>
        <property name="Top">249</property>
    <property name="FileName">Galeria.css</property>
    <property name="Name">StyleSheet1</property>
  </object>
</object>
?>
