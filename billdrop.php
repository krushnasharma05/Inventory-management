<?php
include "dbconnection.php";
// extract($_POST);
// $type=$_POST["P_Type"];
$sql2 = "SELECT P_Name FROM 'biscuits' where P_Type='Biscuit' ";
$result = mysqli_query($conn,$sql2);
// while($row = mysqli_fetch_assoc($query)){
$row = mysqli_fetch_assoc($result);
$Name=$row['P_Name'];
echo '<option  value="'.$Name.'" class="vegitable custom-select">
'.$Name.' </option>';

//  }
?>
CUSTOM.CSS
source code.
.c-card{
width: 262px;
height: 146px;
margin: 10px;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%}}
DASHBORAD.PHP

<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="custom.css">
<title>Inventory Monetoring system</title></head>
<body style="background-color:black;">
<?php     include "Navbar.php"    ?>
<h1 class="text-white text-center pt4 font-moto text-6xl"> Admin Dashboard</h1>
}
<div class="mt-5 d-lg-flex justify-content-evenly">
<button type="button" onclick="location.href='Bill.php'" class="btn fs-3 btn-primary c-card">Sales</button>
<button type="button" onclick="location.href='newstock.php'" class="btn fs-3 btn-success c-card">Live Stock</button>
<button type="button" onclick="location.href='AdStock.php'" class="btn fs-3 btn-light c-card">Add Stock</button>
<button type="button" onclick="location.href='Expense.php'" class="btn fs-3 btn-danger c-card">Expenses</button>
</div>
<div class="mt-5 d-lg-flex justify-content-evenly">
<button type="button" class="btn fs-3 btn-warning c-card">Reports</button>
<button type="button" onclick="location.href='AddProductType.php'" class="btn fs-3 btn-info c-card">Add Product Type</button>
<button type="button" onclick="location.href='AddVendor.php'" class="btn fs-3 btn-secondary c-card">Add Vendor</button></div>
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












