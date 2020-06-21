
<!DOCTYPE html>
<html>
<head>
<title> LIST</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<link rel = "icon" href = "sbb logo 1.jpg" type = "image/x-icon">
</head>
<body>
<?php
    session_start();
    if($_SESSION['sid'] == session_id())
    {
        echo "welcome you ". $_SESSION['uid']. "<br>";
        echo "<a href='logout.php'>Logout</a>";


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

$sql = "SELECT * FROM trip";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Sr no.</th><th>Party Name</th><th>Lorry Number</th><th>Material</th><th>Quantity</th><th>Royalty Number</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Sr"]."</td><td>".$row["Party"]."</td><td> ".$row["Lorry"]."</td><td> ".$row["Material"]."</td><td> ".$row["Quantity"]."</td><td> ".$row["Royalty"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
    }
    else
    {
        header('location:login.php');
    }

?>

</body>
</html>