<?php
//DO NOT ADD ANYTHING ABOVE THIS LINE, AS YOUR PHP SCRIPT WILL NOT WORK

$servername = "sql309.epizy.com";
$username = "epiz_24307324";
$password = "dwM1vgJC0yK0";
$dbname = "epiz_24307324_QC";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO trip values (
  '".$_REQUEST["Sr_noGatepass_no__1"]."',
  '".$_REQUEST["Party__2"]."',
  '".$_REQUEST["Lorry_Number__3"]."',
  '".$_REQUEST["Material__4"]."',
  '".$_REQUEST["Quantity__5"]."',
  '".$_REQUEST["Royalty_Number___6"]."'
)";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br/>";
    echo "For Other Entry <br/>";
    echo "<a href='http://sbb.66ghz.com/'>Back to Form</a>";
}
 else {
    echo "Error: <br/>" ;
    echo "Try again <br/>";
    echo "<a href='http://sbb.66ghz.com/'>Back to Form</a>";
}

$conn->close();
?>