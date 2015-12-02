<?php
<object class="Paneles" name="Paneles" baseclass="Page">
  <property name="Animations">a:0:{}</property>
  <property name="Background"></property>
  <property name="Caption">Page6</property>
  <property name="Height">370</property>
  <property name="HiddenFields">a:0:{}</property>
  <property name="Name">Paneles</property>
  <property name="Width">597</property>
  <object class="Panel" name="Panel1" >
    <property name="ActiveLayer">Capa2</property>
    <property name="Animations">a:0:{}</property>
    <property name="Caption">Panel1</property>
    <property name="Height">328</property>
    <property name="Left">9</property>
    <property name="Name">Panel1</property>
    <property name="Top">30</property>
    <property name="Width">578</property>
    <object class="Label" name="Label1" >
      <property name="Animations">a:0:{}</property>
      <property name="AutoSize">1</property>
      <property name="Caption">Lista de tareas pendientes</property>
      <property name="Height">13</property>
      <property name="Layer">Capa1</property>
      <property name="Left">17</property>
      <property name="Name">Label1</property>
      <property name="Top">21</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Animations">a:0:{}</property>
      <property name="Caption">Nueva tarea</property>
      <property name="Font">
      <property name="Align">taCenter</property>
      <property name="Size">36pt</property>
      <property name="Weight">bold</property>
      </property>
      <property name="Height">67</property>
      <property name="Layer">Capa2</property>
      <property name="Left">22</property>
      <property name="Name">Label2</property>
      <property name="ParentFont">0</property>
      <property name="Width">534</property>
    </object>
    <object class="DateTimePicker" name="DateTimePicker1" >
      <property name="Animations">a:0:{}</property>
      <property name="Height">19</property>
      <property name="Layer">Capa2</property>
      <property name="Left">7</property>
      <property name="Name">DateTimePicker1</property>
      <property name="Top">91</property>
      <property name="Value"></property>
      <property name="Width">98</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Animations">a:0:{}</property>
      <property name="Caption"><![CDATA[Fecha de finalizaci&oacute;n]]></property>
      <property name="Height">13</property>
      <property name="Layer">Capa2</property>
      <property name="Left">7</property>
      <property name="Name">Label3</property>
      <property name="Top">74</property>
      <property name="Width">107</property>
    </object>
  </object>
  <object class="Button" name="Button1" >
    <property name="Animations">a:0:{}</property>
    <property name="Caption">Lista</property>
    <property name="Height">25</property>
    <property name="Left">14</property>
    <property name="Name">Button1</property>
    <property name="Tag">Capa1</property>
    <property name="Top">4</property>
    <property name="Width">75</property>
    <property name="OnClick">Button1Click</property>
  </object>
  <object class="Button" name="Button2" >
    <property name="Animations">a:0:{}</property>
    <property name="Caption">Nueva</property>
    <property name="Height">25</property>
    <property name="Left">88</property>
    <property name="Name">Button2</property>
    <property name="Tag">Capa2</property>
    <property name="Top">4</property>
    <property name="Width">75</property>
    <property name="OnClick">Button1Click</property>
  </object>
</object>
?>
