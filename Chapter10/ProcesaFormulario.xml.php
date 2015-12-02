<?php
<object class="NuevaEntrada" name="NuevaEntrada" baseclass="Page">
  <property name="Animations">a:0:{}</property>
  <property name="Background"></property>
  <property name="Caption">Nueva entrada</property>
  <property name="Height">370</property>
  <property name="HiddenFields">a:0:{}</property>
  <property name="Name">NuevaEntrada</property>
  <property name="UseAjax">1</property>
  <property name="UseAjaxUri">ProcesaFormulario.php</property>
  <property name="Width">597</property>
  <object class="DateTimePicker" name="Fecha" >
    <property name="Animations">a:0:{}</property>
    <property name="BorderRadius">
    <property name="BottomLeft">10px</property>
    <property name="Color">#000066</property>
    <property name="Style">brsSolid</property>
    <property name="TopRight">10px</property>
    <property name="Width">4px</property>
    </property>
    <property name="Height">40</property>
    <property name="Left">17</property>
    <property name="MaxValue">2013-12-31</property>
    <property name="MinValue">2013-1-1</property>
    <property name="Name">Fecha</property>
    <property name="Top">87</property>
    <property name="Value">2013-2-28</property>
    <property name="Width">172</property>
  </object>
  <object class="Edit" name="Tipo" >
    <property name="Animations">a:0:{}</property>
    <property name="DataList">ListaTipos</property>
    <property name="Height">35</property>
    <property name="Left">241</property>
    <property name="Name">Tipo</property>
    <property name="Pattern"><![CDATA[Trabajo|Estudios|Dom&eacute;stica]]></property>
    <property name="PlaceHolder">Tipo de tarea</property>
    <property name="Text">Trabajo</property>
    <property name="Top">89</property>
    <property name="Width">123</property>
  </object>
  <object class="TrackBar" name="Duracion" >
    <property name="Animations">a:0:{}</property>
    <property name="Frequency">1</property>
    <property name="Height">28</property>
    <property name="Left">410</property>
    <property name="MaxValue">30</property>
    <property name="MinValue">1</property>
    <property name="Name">Duracion</property>
    <property name="ParentShowHint"></property>
    <property name="Position">1</property>
    <property name="Top">154</property>
    <property name="Width">121</property>
  </object>
  <object class="Memo" name="Descripcion" >
    <property name="Animations">a:0:{}</property>
    <property name="Color">#FFFF66</property>
    <property name="Cols">60</property>
    <property name="Gradient">
    <property name="EndColor">#FFD080</property>
    </property>
    <property name="Height">155</property>
    <property name="Left">15</property>
    <property name="Lines"><![CDATA[a:1:{i:0;s:37:&quot;Introduzca la descripci&oacute;n de la tarea&quot;;}]]></property>
    <property name="Name">Descripcion</property>
    <property name="ParentColor">0</property>
    <property name="Top">154</property>
    <property name="Width">347</property>
  </object>
  <object class="Label" name="Label1" >
    <property name="Animations">a:0:{}</property>
    <property name="Caption">Nueva tarea</property>
    <property name="Font">
    <property name="Align">taCenter</property>
    <property name="Size">36pt</property>
    </property>
    <property name="Height">56</property>
    <property name="Name">Label1</property>
    <property name="ParentFont">0</property>
    <property name="Width">592</property>
  </object>
  <object class="Label" name="Mensaje" >
    <property name="Animations">a:0:{}</property>
    <property name="Caption">Mensaje</property>
    <property name="Height">35</property>
    <property name="Left">17</property>
    <property name="Name">Mensaje</property>
    <property name="Top">324</property>
    <property name="Width">557</property>
  </object>
  <object class="Button" name="Button1" >
    <property name="Animations">a:0:{}</property>
    <property name="Caption">Crear entrada</property>
    <property name="Height">25</property>
    <property name="Left">447</property>
    <property name="Name">Button1</property>
    <property name="Top">284</property>
    <property name="Width">91</property>
    <property name="jsOnClick">Button1JSClick</property>
  </object>
  <object class="DataList" name="ListaTipos" >
        <property name="Left">420</property>
        <property name="Top">98</property>
    <property name="Items"><![CDATA[a:3:{s:7:&quot;Trabajo&quot;;s:7:&quot;Trabajo&quot;;s:8:&quot;Estudios&quot;;s:8:&quot;Estudios&quot;;s:9:&quot;Dom&eacute;stica&quot;;s:9:&quot;Dom&eacute;stica&quot;;}]]></property>
    <property name="Name">ListaTipos</property>
    <property name="Tag">1</property>
  </object>
</object>
?>
