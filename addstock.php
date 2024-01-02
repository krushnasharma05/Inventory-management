  <?php
$servername ="localhost";
$username ="root";
$password ="";
$database="project";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
die("connection failed".mysqli_connect_error());
}$P_ID = $_POST['Id'];
$P_Name = $_POST['Name'];
$P_Type = $_POST['Type'];
$P_Date = $_POST['Date'];
$P_Quantity = $_POST['Quantity'];
$P_Unit = $_POST['Unit'];
$P_Vendor = $_POST['Vendor'];
$P_Total = $_POST['Total'];
$P_Selling = $_POST['Sell'];
//  $sql= "INSERT INTO `inventory` (`P_ID`, `P_Name`, `P_Type`, `P_Date`, `P_Quantity`, `P_Unit`, `P_Vendor`, `P_Total`, `P_Selling`) VALUES ('$P_ID', '$P_Name', '$P_Type', '$P_Date', '$P_Quantity', '$P_Unit', '$P_Vendor', '$P_Total', '$P_Selling')";
// $sql = "INSERT INTO 'biscuits' VALUES('$P_ID', '$P_Name', '$P_Type', '$P_Date', '$P_Quantity', '$P_Unit', '$P_Vendor', '$P_Total', '$P_Selling')";
$sql = "INSERT INTO `biscuits`(`P_ID`, `P_Name`, `P_Type`, `P_Date`, `P_Quantity`, `P_Unit`, `P_Vendor`, `P_Total`, `P_Selling`) VALUES ('$P_ID','$P_Name','$P_Type','$P_Date','$P_Quantity','$P_Unit','$P_Vendor','$P_Total','$P_Selling')";
if(mysqli_query($con,$sql)){
// location.replace("AdStock.php");
echo "<script>alert('Stock Added Successfully')</script>";
}else{
echo"<script>alert('Stock Not Added')</script>";
}mysqli_close($con);?>



