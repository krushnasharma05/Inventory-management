<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="custom.css">
<title>Inventory Monetoring system</title></head><body>
<?php
include "Navbar.php";
include "dbconnection.php";
?>
<div class="container mt-5">
<table class="table"><thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Expense Type</th>
<th scope="col">Expense Amount</th>
<th scope="col">Date</th>
</tr>
</thead>
<tbody>
<?php
$result = mysqli_query($conn,"SELECT * FROM `expense`");
if(mysqli_num_rows($result)){
while($row = mysqli_fetch_assoc($result))
{
$id = $row['Id'];
$name = $row['E_Type'];
$price = $row['E_Amount'];
$date = $row['E_Date'];
echo(" <tr>
<td>".$id."</td>
<td>".$name."</td>
<td>".$price."</td>
<td>".$date."</td>
</tr>");
}  } ?>
</tbody>
</table>
</div>
<div class="container mt-5">
<form method="POST">
<div class="mb-3">
<div class="row">
<div class="col-6">
<label for="exampleInputPassword1" class="form-label">Expense Type</label>
<input type="text" class="form-control" name="name" id="exampleInputPassword1">
</div>
<div class="col-6">
<label for="exampleInputPassword1" class="form-label">Amount</label>
<input type="text" class="form-control" name="amount" id="exampleInputPassword1">
</div>
<div class="col-6">
<label for="exampleInputPassword1" class="form-label">Date</label>
<input type="date" class="form-control" name="date" id="exampleInputPassword1">
</div>       <div class="col-6 d-flex align-items-end">
<input type="submit" class="btn btn-primary" name="sub" id="exampleInputPassword2"value="Submit"> </div></div>
</form>
</div>
<?php
if(isset($_POST['sub'])){
$name = $_POST['name'];
$price = $_POST['amount'];
$date = $_POST['date'];
$sql = "INSERT INTO `expense` VALUES (' ','$name','$price','$date')";
if(mysqli_query($conn,$sql)){
header("Refresh:0");
}
}
?>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
--></body>
</html>










