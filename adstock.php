<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Live Inventory Monetoring System</title>
</head>
<body>
<?php
include "Navbar.php";
include "dbconnection.php";
?>
<div class="container">
<h1 class="display-1 my-3">Add Stock</h1>
<form class="row g-3" method="POST" action="AddStock.php">
<div class="col-md-6">
<label for="inputPassword4" class="form-label">Product ID</label>
<input type="number" name="Id" class="form-control" id="inputPassword4">
</div>
<div class="col-md-6">
<label for="inputPassword4" class="form-label">Product Type</label>
<select name="Type" id="vegitable" class="form-control">
<?php
$sql = "SELECT P_Type FROM `p_type` ";
$query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($query)){
?>
<option id="<?php echo $row['id']; ?>" value="<?php echo $row['P_Type']; ?>"
class="vegitable custom-select">
<?php echo $row['P_Type']; ?>
</option>
<?php  }?>
</select>
</div>
<div class="col-md-6">
<label for="inputPassword4" class="form-label">Product Name</label>
<input type="text" name="Name" class="form-control" id="inputPassword4">
</div>   <div class="col-md-6">
<label for="inputPassword4" class="form-label">Purchase Date</label>
<input type="date" name="Date" class="form-control" id="inputPassword4">
</div>
<div class="col-6">
<label for="unit" class="form-label">Purchasing Price/unit</label>
<input type="number" name="Unit" class="form-control" min="1" id="unit">
</div>
<div class="col-6">
<label for="quantity" class="form-label">Quantity</label>
<input type="number" name="Quantity" class="form-control" min="1" id="quantity">
</div>
<div class="col-md-6">
<label for="inputPassword4" class="form-label">Vendor</label>
<select name="Type" id="vegitable" class="form-control">
<?php
$sql = "SELECT Vendor FROM `P_Vendor` ";
$query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($query)){
?>
<option id="<?php echo $row['Id']; ?>" value="<?php echo $row['Vendor']; ?>"
class="vegitable custom-select">
<?php echo $row['Vendor']; ?>
</option>
<?php  }?>
</select>
</div>
<!-- <div class="col-6">
<label for="inputAddress2" class="form-label">Vendor Name</label>
<input type="text" name="Vendor" class="form-control" id="inputAddress2">
</div> -->
<div class="col-6">
<label for="#subTotal" class="form-label">Total Price</label>
<input type="text" name="Total" class="form-control" id="subTotal">
</div>
<div class="col-6">
<label for="inputAddress2" class="form-label">Selling Price/unit</label>
<input type="number" name="Sell" class="form-control" id="inputAddress2">
</div>
<div class="col-12">
<button type="submit" value="submit" class="btn btn-success">Add</button>
</div>
</form>
</div>
<script type="text/javascript">
var total = 0;
$('#quantity').keyup(()=>{
var quantity = $('#quantity').val();
var q = parseInt(quantity);
var unit = $('#unit').val();
var u = parseInt(unit);
total =  u * q;
$("#subTotal").attr('value',total.toString())    })
// document.getElementById("subTotal").setAttribute('value', total);
</script>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
