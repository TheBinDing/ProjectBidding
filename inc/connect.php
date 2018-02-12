<?php
    // $host = "192.168.100.133";
    // $host = "192.168.100.128";
    // $host = "192.168.1.30";
    $user = "sa";
    $password = "tentsql";
    $dbname = "ProjectBibding";
    $objConncet = mssql_connect($host,$user,$password) or die("Can't connect DB");
    $objDB = mssql_select_db($dbname) or die("Can't select DB");
    $objDB = mysql_query("SET NAMES 'UTF-8'");
?>