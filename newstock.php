<?php include "dbconnection.php";
$sql = "SELECT * FROM `biscuits`";
$result = mysqli_query($conn, $sql);
$dataArray = array();
$nameArray = array();
for ($i = 0; $i < mysqli_num_rows($result); $i++) {
$dataArray[$i] = 0;
$nameArray[$i] = '';
}
if (mysqli_num_rows($result) > 0) {
$i = 0;
while ($row = mysqli_fetch_array($result)) {
$id = $row['P_ID'];
$qty = $row['P_Quantity'];
$name = $row['P_Name'];
$dataArray[$i] = $qty;
$nameArray[$i] = $name;
$i++;
}
}
$dataPoints = array();
for ($i = 0; $i < mysqli_num_rows($result); $i++) {
$dataPoints[$i] = array("y" => $dataArray[$i], "label" =>  $nameArray[$i]);
}
$sql2 = "SELECT * FROM `lentils`";
$result2 = mysqli_query($conn, $sql2);
$dataArray2 = array();
$nameArray2 = array();
for ($i = 0; $i < mysqli_num_rows($result2); $i++) {
$dataArray2[$i] = 0;
$nameArray2[$i] = '';
}
if (mysqli_num_rows($result2) > 0) {
$i = 0;
while ($row = mysqli_fetch_array($result2)) {
$id = $row['P_ID'];
$qty = $row['P_Quantity'];
$name = $row['P_Name'];
$dataArray2[$i] = $qty;
$nameArray2[$i] = $name;
$i++;
}
}
$dataPoints2 = array();
for ($i = 0; $i < mysqli_num_rows($result2); $i++) {
$dataPoints2[$i] = array("y" => $dataArray2[$i], "label" =>  $nameArray2[$i]);
}
// for ($i = 0; $i < count($dataPoints2); $i++) {
// 	foreach ($dataPoints2[$i] as $key => $value) {
// 		echo $key . " as " . $value."<br/>";
// 	}
// 	echo("<br/>");
// }
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Graphical Representation</title>
<script>
window.onload = function() {
var chart = new CanvasJS.Chart("chartContainer", {
animationEnabled: true,
theme: "light2",
title: {
text: "Stock Reserves"
},
axisY: {
title: "Biscuits",
interval: 10,
minimum: 0,
},
data: [{
type: "column",
yValueFormatString: "# units",
dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
}]
});
chart.render();
var chart2 = new CanvasJS.Chart("chartContainer2", {
animationEnabled: true,
theme: "light2",
title: {
text: "Stock Reserves"
},
axisY: {
title: "Lentils",
interval: 10,
minimum: 0,
},
data: [{
type: "column",
yValueFormatString: "# units",
dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
}]
});
chart2.render();
}
</script>
<style>
.bg {
background-color: #000;
}
</style>
</head>
<body>
<?php
include "Navbar.php"
?>
<div class="container">
<div class="accordion my-5" id="accordionPanelsStayOpenExample">
<div class="accordion-item">
<h2 class="accordion-header" id="panelsStayOpen-headingOne">
<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
Biscuits
</button>
</h2>
<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show p-3" aria-labelledby="panelsStayOpen-headingOne">
<div class="d-flex justify-content-center align-items-center">
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</div></div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="panelsStayOpen-headingOne">
<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
Lentils
</button>
</h2>
<div id="panelsStayOpen-collapse2" class="accordion-collapse collapse show p-3" aria-labelledby="panelsStayOpen-headingOne">
<div class="d-flex justify-content-center align-items-center">
<div id="chartContainer2" style="height: 370px; width: 100%;"></div>
</div>	</div></div></div>
<!-- <div class="dropdown mt-5">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
Products
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
<button class="btn btn-primary dropdown-item" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
Biscuits
</button>
<button class="btn btn-primary dropdown-item" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
Lentins
</button>
</ul>
</div>
<div class="collapse p-5 mt-5" id="collapseExample">
<div class="d-flex justify-content-center align-items-center">
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</div>
</div> -->
</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
--></body></html>
