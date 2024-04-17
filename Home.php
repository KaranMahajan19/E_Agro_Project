<?php
include("../Functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Farmer Homepage</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font- awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font- awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="../portal_files/bootstrap.min.css">
<script src="../portal_files/jquery.min.js.download"></script>
<script src="../portal_files/popper.min.js.download"></script>
<script src="../portal_files/bootstrap.min.js.download"></script>

<body>
<nav class="navbar navbar-expand-xl ">
<div class=" flex-row-reverse left ">
<div class="p-2">
</div>
<a class="float-left" href="#">
<img src="agro.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
</a>
</div>
<button class="navbar-toggler" data-toggle="collapse" style="margin-left:- 20px;" data-target="#navbarSupportedContent" aria- controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">


<span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;font-size:20px; "></i></span>


</button>
<a class="float-left" href="farmerHomepage.php">
<img src="agro.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px;">
</a>
<div class="collapse navbar-collapse" id="navbarSupportedContent">


<div class="proicon">

<?php
if (!isset($_SESSION['phonenumber'])) {
echo "<a href='../auth/FarmerLogin.php'> <div class='text- success logins '></div></a>";
}
?>
</div>

<div class="list-group moblists">

<?php
if (isset($_SESSION['phonenumber'])) {

echo "<a href='FarmerProfile.php' class='list-group-item list- group-item-action ' style='background-color:#292b2c;text- align:center;color:goldenrod'>Profile</a>";
echo "<a href='Transactions.php' class='list-group-item list- group-item-action' style='background-color:#292b2c;text- align:center;color:goldenrod'>Orders</a>";
echo "<a href='logout.php' class='list-group-item list-group- item-action ' style='background-color:#292b2c;text- align:center;color:goldenrod'>Logout</a>";
} else {
echo "<a href='../auth/FarmerLogin.php'> <div class='text- success logins '>Login</div></a>";
}
?>
<div class='loginz' style="text-align:center;">
<?php getFarmerUsername(); ?>
</div>
</div>
</div>
<div class="features container">
<h1 style="font-weight: bold;color:black; text-align:center">Standout Features</h1>
<div class="card-deck row text-center" style="display: flex; flex-wrap:
wrap;">


<div class="card">
<p class="aligncenter">

<img class="card-img-top image" src="../Images/Homepage/sms.png" alt="Card image cap" width="250px" height="200px">
</p>
<div class="card-body">
<h4 class="card-title font-weight-bold">Sms System </h4>
<br>

<h5 class="card-text">Upload and Edit Your Products via SMS </h5>
</div>
</div>
<div class="card">
<p class="aligncenter">
<img class="card-img-top image" src="../Images/Homepage/handshake.png" alt="Card image cap" width="250px" height="200px">
</p>
<div class="card-body">
<h4 class="card-title font-weight-bold">Buyer Connection</h4>
<br>
<h5 class="card-text">Get in direct touch with the buyer to satisfy
its need </h5>
</div>
</div>
<div class="card">
<p class="aligncenter">
<img class="card-img-top image" src="../Images/Homepage/farmer.png" alt="Card image cap" width="250px" height="200px">
</p>
<div class="card-body">
<h4 class="card-title font-weight-bold">Farmer Group

Formation</h4>


<br>
<h5 class="card-text">Get in touch with other farmers making

your own community where you can ask for help</h5>
</div>
</div>
</div>