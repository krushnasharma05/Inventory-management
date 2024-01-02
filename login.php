
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="custom.css">
<title>Log In</title>
</head><body>
<section class="vh-100">
<div class="container-fluid h-custom">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col-md-9 col-lg-6 col-xl-5">
<img src="img/img1.webp" class="img-fluid" alt="Sample image">
</div>
<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
<h1 class="display-1 my-5">Log In</h1>
<form method="POST">
<!-- Email input -->
<div class="form-outline mb-4">
<input type="text"name="uname" id="form3Example3" class="form-control form-control-lg" placeholder="Username" />  </div>
<!-- Password input -->
<div class="form-outline mb-3">
<input type="password" name="pass" id="form3Example4" class="form-control form-control-lg" placeholder="password" />   </div>
<div class="text-center text-lg-start mt-4 pt-2">
<input name="submit" type="submit" value="Login" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;"/>    </div>  </form>
</div></div> </div>    </section>
<?php
$uname = $_POST["uname"];
$pass = $_POST["pass"];
$error="";
$success="";
if(isset($_POST["submit"])){
if($uname == "admin"){
if($pass == "password"){
$error ="";
header("Location: Dashboard.php");
}
else{
$error="Invalid Password";
$success="";
}
}     else{
$error="Invalid Username";
$success="";
}}
?>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body></html>








