<?php
function OpenCon()
 {
 $dbhost = "sql309.epizy.com";
 $dbuser = "epiz_24307324";
 $dbpass = "dwM1vgJC0yK0";
 $db = "epiz_24307324_QC";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }

?>