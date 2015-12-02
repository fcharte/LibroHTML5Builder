<?php
<object class="Page6" name="Page6" baseclass="Page">
  <property name="Animations">a:0:{}</property>
  <property name="Background"></property>
  <property name="Caption">Page6</property>
  <property name="Height">370</property>
  <property name="HiddenFields">a:0:{}</property>
  <property name="Name">Page6</property>
  <property name="Width">597</property>
  <object class="DBRepeater" name="LIBROS1" >
    <property name="Animations">a:0:{}</property>
    <property name="Datasource">DataModule1.dsLIBROS1</property>
    <property name="Height">24</property>
    <property name="Layout">
    <property name="Type">XY_LAYOUT</property>
    </property>
    <property name="Name">LIBROS1</property>
    <property name="Top">15</property>
    <property name="Width">593</property>
    <object class="Label" name="Label1" >
      <property name="Animations">a:0:{}</property>
      <property name="Caption">Label1</property>
      <property name="DataField">ISBN</property>
      <property name="DataSource">DataModule1.dsLIBROS1</property>
      <property name="Height">13</property>
      <property name="Left">19</property>
      <property name="Name">Label1</property>
      <property name="Top">5</property>
      <property name="Width">179</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Animations">a:0:{}</property>
      <property name="Caption">Label2</property>
      <property name="DataField">TITULO</property>
      <property name="DataSource">DataModule1.dsLIBROS1</property>
      <property name="Height">13</property>
      <property name="Left">228</property>
      <property name="Name">Label2</property>
      <property name="Top">5</property>
      <property name="Width">355</property>
    </object>
  </object>
  <object class="Pager" name="Pager1" >
    <property name="Animations">a:0:{}</property>
    <property name="AutoSize">1</property>
    <property name="DataSource">DataModule1.dsLIBROS1</property>
    <property name="Height">33</property>
    <property name="Left">3</property>
    <property name="Name">Pager1</property>
    <property name="NextCaption"><![CDATA[sig &amp;gt;&amp;gt;]]></property>
    <property name="PreviousCaption"><![CDATA[&amp;lt;&amp;lt; ant]]></property>
    <property name="Top">337</property>
    <property name="Width">590</property>
  </object>
</object>
?>
