<?php
<object class="DataModule1" name="DataModule1" baseclass="DataModule">
  <property name="Animations">a:0:{}</property>
  <property name="Height">370</property>
  <property name="Name">DataModule1</property>
  <property name="Width">597</property>
  <object class="Database" name="dbmicros1" >
        <property name="Left">62</property>
        <property name="Top">84</property>
    <property name="Connected">1</property>
    <property name="ConnectionParams">a:0:{}</property>
    <property name="DatabaseName"><![CDATA[localhost:C:\Users\Francisco\Documents\HTML5 Builder\Projects\WCASimple\micros.fdb]]></property>
    <property name="DatabaseOptions">a:0:{}</property>
    <property name="DriverName">firebird</property>
    <property name="Name">dbmicros1</property>
    <property name="UserName">sysdba</property>
    <property name="UserPassword">masterkey</property>
  </object>
  <object class="Table" name="tbLIBROS1" >
        <property name="Left">62</property>
        <property name="Top">134</property>
    <property name="Active">1</property>
    <property name="Database">dbmicros1</property>
    <property name="LimitCount"></property>
    <property name="LimitStart"></property>
    <property name="MasterFields">a:0:{}</property>
    <property name="MasterSource"></property>
    <property name="Name">tbLIBROS1</property>
    <property name="TableName">LIBROS</property>
  </object>
  <object class="Datasource" name="dsLIBROS1" >
        <property name="Left">62</property>
        <property name="Top">184</property>
    <property name="Dataset">tbLIBROS1</property>
    <property name="Name">dsLIBROS1</property>
  </object>
</object>
?>
