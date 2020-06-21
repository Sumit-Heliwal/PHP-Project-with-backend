<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
<script type="text/javascript" src="tableExport.js"></script>
<script type="text/javascript" src="jquery.base64.js"></script>
<script type="text/javascript" src="html2canvas.js"></script>
<script type="text/javascript" src="jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="jspdf/jspdf.js"></script>
<script type="text/javascript" src="jspdf/libs/base64.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php
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

 $records = array();

 while($row = mysqli_fetch_assoc($result)){ 
	$records[] = $row;
  }

?>
<div class="container">
	<div class="row">
		<div class="btn-group pull-right" style=" padding: 10px;">
			<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
     <span class="glyphicon glyphicon-th-list"></span> Dropdown
   
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#" onclick="$('#employees').tableExport({type:'json',escape:'false'});"> <img src="images/json.jpg" width="24px"> JSON</a></li>
								<li><a href="#" onclick="$('#employees').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"><img src="images/json.jpg" width="24px">JSON (ignoreColumn)</a></li>
								<li><a href="#" onclick="$('#employees').tableExport({type:'json',escape:'true'});"> <img src="images/json.jpg" width="24px"> JSON (with Escape)</a></li>
								<li class="divider"></li>
								<li><a href="#" onclick="$('#employees').tableExport({type:'xml',escape:'false'});"> <img src="images/xml.png" width="24px"> XML</a></li>
								<li><a href="#" onclick="$('#employees').tableExport({type:'sql'});"> <img src="images/sql.png" width="24px"> SQL</a></li>
								<li class="divider"></li>
								<li><a href="#" onclick="$('#employees').tableExport({type:'csv',escape:'false'});"> <img src="images/csv.png" width="24px"> CSV</a></li>
								<li><a href="#" onclick="$('#employees').tableExport({type:'txt',escape:'false'});"> <img src="images/txt.png" width="24px"> TXT</a></li>
								<li class="divider"></li>				
								
								<li><a href="#" onclick="$('#employees').tableExport({type:'excel',escape:'false'});"> <img src="images/xls.png" width="24px"> XLS</a></li>
								<li><a href="#" onclick="$('#employees').tableExport({type:'doc',escape:'false'});"> <img src="images/word.png" width="24px"> Word</a></li>
								<li><a href="#" onclick="$('#employees').tableExport({type:'powerpoint',escape:'false'});"> <img src="images/ppt.png" width="24px"> PowerPoint</a></li>
								<li class="divider"></li>
								<li><a href="#" onclick="$('#employees').tableExport({type:'png',escape:'false'});"> <img src="images/png.png" width="24px"> PNG</a></li>
								<li><a href="#" onclick="$('#employees').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> <img src="images/pdf.png" width="24px"> PDF</a></li>
								
  </ul>
</div>
		</div>
	</div>	
	<div class="row" style="height:300px !important;overflow:scroll;">
						<table id="employees" class="table table-striped">
                      <?php   if ($result->num_rows > 0) {
    echo "<tr><th>Sr no.</th><th>Party Name</th><th>Lorry Number</th><th>Material</th><th>Quantity</th><th>Royalty Number</th></tr>";   
    }
    			
				foreach($records as $rec):
                 echo "<tr><td>".$rec["Sr"]."</td><td>".$rec["Party"]."</td><td> ".$rec["Lorry"]."</td><td> ".$rec["Material"]."</td><td> ".$rec["Quantity"]."</td><td> ".$rec["Royalty"]."</td></tr>";
					endforeach; ?>
					
					</table>
</div>
</div>

</body>
</html>
<script type="text/javascript">
//$('#employees').tableExport();
$(function(){
	$('#example').DataTable();
      }); 
</script>