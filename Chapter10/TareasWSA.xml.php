<?php
<object class="TareasWSA" name="TareasWSA" baseclass="Page">
  <property name="Animations">a:0:{}</property>
  <property name="Background"></property>
  <property name="Caption">Page6</property>
  <property name="Height">370</property>
  <property name="HiddenFields">a:0:{}</property>
  <property name="Name">TareasWSA</property>
  <property name="TemplateEngine">RPCLTemplate</property>
  <property name="TemplateFilename">plantilla.html</property>
  <property name="Width">706</property>
  <object class="Label" name="Descripcion1" >
    <property name="Animations">a:0:{}</property>
    <property name="Caption"><![CDATA[Descripci&oacute;n de la tarea a realizar]]></property>
    <property name="Height">29</property>
    <property name="Left">12</property>
    <property name="Name">Descripcion1</property>
    <property name="Style">Tarea</property>
    <property name="Top">91</property>
    <property name="Width">243</property>
    <property name="jsOnClick">Descripcion1Click</property>
  </object>
  <object class="ProgressBar" name="Tiempo1" >
    <property name="Animations">a:0:{}</property>
    <property name="Height">17</property>
    <property name="Left">12</property>
    <property name="Max">30</property>
    <property name="Min">1</property>
    <property name="Name">Tiempo1</property>
    <property name="Optimum"></property>
    <property name="Orientation">pbHorizontal</property>
    <property name="ParentShowHint"></property>
    <property name="Position">5</property>
    <property name="Top">43</property>
    <property name="Type">pbsMeterBar</property>
    <property name="Width">200</property>
  </object>
  <object class="Label" name="Fecha1" >
    <property name="Alignment">agCenter</property>
    <property name="Animations">a:0:{}</property>
    <property name="Caption">28/2/2013</property>
    <property name="DivWrap">0</property>
    <property name="Height">18</property>
    <property name="Left">-43</property>
    <property name="Name">Fecha1</property>
    <property name="Style">Fecha</property>
    <property name="Top">5</property>
    <property name="Width">640</property>
  </object>
  <object class="DateTimePicker" name="Fecha" >
    <property name="Animations">a:0:{}</property>
    <property name="BorderRadius">
    <property name="BottomLeft">10px</property>
    <property name="Color">#000066</property>
    <property name="Style">brsSolid</property>
    <property name="TopRight">10px</property>
    <property name="Width">4px</property>
    </property>
    <property name="Height">35</property>
    <property name="Left">18</property>
    <property name="MaxValue">2013-12-31</property>
    <property name="MinValue">2013-1-1</property>
    <property name="Name">Fecha</property>
    <property name="Top">148</property>
    <property name="Value">2013-2-28</property>
    <property name="Width">171</property>
  </object>
  <object class="Edit" name="Tipo" >
    <property name="Animations">a:0:{}</property>
    <property name="DataList">ListaTipos</property>
    <property name="Height">21</property>
    <property name="Left">17</property>
    <property name="Name">Tipo</property>
    <property name="Pattern"><![CDATA[Trabajo|Estudios|Dom&eacute;stica]]></property>
    <property name="PlaceHolder">Tipo de tarea</property>
    <property name="Text">Trabajo</property>
    <property name="Top">207</property>
    <property name="Width">121</property>
  </object>
  <object class="TrackBar" name="Duracion" >
    <property name="Animations">a:0:{}</property>
    <property name="Frequency">1</property>
    <property name="Height">28</property>
    <property name="Left">306</property>
    <property name="MaxValue">30</property>
    <property name="MinValue">1</property>
    <property name="Name">Duracion</property>
    <property name="ParentShowHint"></property>
    <property name="Position">1</property>
    <property name="Top">58</property>
    <property name="Width">121</property>
  </object>
  <object class="Memo" name="Descripcion" >
    <property name="Animations">a:0:{}</property>
    <property name="Color">#FFFF66</property>
    <property name="Cols">60</property>
    <property name="Gradient">
    <property name="EndColor">#FFD080</property>
    </property>
    <property name="Height">122</property>
    <property name="Left">303</property>
    <property name="Lines"><![CDATA[a:1:{i:0;s:37:&quot;Introduzca la descripci&oacute;n de la tarea&quot;;}]]></property>
    <property name="Name">Descripcion</property>
    <property name="ParentColor">0</property>
    <property name="Top">106</property>
    <property name="Width">195</property>
  </object>
  <object class="Button" name="Crear" >
    <property name="Animations"><![CDATA[a:1:{i:0;a:2:{i:0;s:11:&quot;onmouseover&quot;;i:1;a:4:{i:0;s:6:&quot;toggle&quot;;i:1;s:4:&quot;this&quot;;i:2;s:10:&quot;Animation1&quot;;i:3;a:0:{}}}}]]></property>
    <property name="ButtonType">btNormal</property>
    <property name="Caption">Crear la tarea</property>
    <property name="Font">
    <property name="Size">18pt</property>
    </property>
    <property name="Height">51</property>
    <property name="Left">328</property>
    <property name="Name">Crear</property>
    <property name="ParentFont">0</property>
    <property name="Top">240</property>
    <property name="Transform">
    <property name="Rotate">17deg</property>
    <property name="ScaleX">1.2</property>
    <property name="ScaleY">1.9</property>
    <property name="SkewX">13deg</property>
    <property name="SkewY">-29deg</property>
    <property name="TranslateX">63px</property>
    </property>
    <property name="Width">179</property>
    <property name="jsOnClick">CrearClick</property>
  </object>
  <object class="DataList" name="ListaTipos" >
        <property name="Left">164</property>
        <property name="Top">194</property>
    <property name="Items"><![CDATA[a:3:{s:7:&quot;Trabajo&quot;;s:7:&quot;Trabajo&quot;;s:8:&quot;Estudios&quot;;s:8:&quot;Estudios&quot;;s:9:&quot;Dom&eacute;stica&quot;;s:9:&quot;Dom&eacute;stica&quot;;}]]></property>
    <property name="Name">ListaTipos</property>
    <property name="Tag">1</property>
  </object>
  <object class="StyleSheet" name="StyleSheet1" >
        <property name="Left">112</property>
        <property name="Top">306</property>
    <property name="FileName">TareasWSA.css</property>
    <property name="IncludeStandard">1</property>
    <property name="Name">StyleSheet1</property>
  </object>
</object>
?>
