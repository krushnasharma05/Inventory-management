<?php
include "dbconnection.php";
$sql = "SELECT * FROM `biscuits`";
$result = mysqli_query($conn, $sql);
$dataArray = array('0' => 0, '1' => 0, '2' => 0, '3' => 0, '4' => 0,);
$nameArray = array('0' => '', '1' => '', '2' => '', '3' => '', '4' => '',);
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
$dataPoints = array(
array("y" => $dataArray[0], "label" =>  $nameArray[0]),
array("y" => $dataArray[1], "label" =>  $nameArray[1]),
array("y" => $dataArray[2], "label" =>  $nameArray[2]),
array("y" => $dataArray[3], "label" =>  $nameArray[3]),
array("y" => $dataArray[4], "label" =>  $nameArray[4]),
array("y" => $dataArray[5], "label" =>  $nameArray[5]),
array("y" => $dataArray[6], "label" =>  $nameArray[6]),
array("y" => $dataArray[7], "label" =>  $nameArray[7]),
array("y" => $dataArray[8], "label" =>  $nameArray[8]),
array("y" => $dataArray[9], "label" =>  $nameArray[9]),
);
$sql2 = "SELECT * FROM `lentils`";
$result2 = mysqli_query($conn, $sql2);
$dataArray2 = array('0' => 0, '1' => 0, '2' => 0, '3' => 0, '4' => 0,);
$nameArray2 = array('0' => '', '1' => '', '2' => '', '3' => '', '4' => '',);
if (mysqli_num_rows($result) > 0) {
$i = 0;
while ($row2 = mysqli_fetch_array($result2)) {
$id = $row2['P_ID'];
$qty = $row2['P_Quantity'];
$name = $row2['P_Name'];
$dataArray2[$i] = $qty;
$nameArray2[$i] = $name;
$i++;
}
}
$dataPoints2 = array(
array("y" => $dataArray2[0], "label" =>  $nameArray2[0]),
array("y" => $dataArray2[1], "label" =>  $nameArray2[1]),
array("y" => $dataArray2[2], "label" =>  $nameArray2[2]),
);
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Hello, world!</title>
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
<?php  include "Navbar.php"  ?>
<div class="container">
<div class="accordion mt-5" id="accordionPanelsStayOpenExample">
<div class="accordion-item">
<h2 class="accordion-header" id="panelsStayOpen-headingOne">
<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
Biscuits
</button>
</h2>
<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show p-3" aria-labelledby="panelsStayOpen-headingOne">
<div class="d-flex justify-content-center align-items-center">
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="panelsStayOpen-headingTwo">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
Lentils
</button>
</h2>
<div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
<div class="accordion-body">
<div id="chartContainer2" style="height: 400px; width: 100%;"></div>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="panelsStayOpen-headingThree">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
Chocolates
</button>
</h2>
<div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
<div class="accordion-body">
<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
</div>
</div>
</div>
</div>
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
-->
</body>
</html>










