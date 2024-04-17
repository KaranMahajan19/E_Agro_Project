<?php include("../Functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Farmers Homepage</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></scr ipt>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<a href="https://icons8.com/icon/83325/roman-soldier"></a>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font- awesome/4.7.0/css/font-awesome.min.css">

<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

<script> var a;

function display()
{if (a == 0)
{
document.getElementById("majic").style.visibility = "hidden"; document.getElementById("show").style.visibility = "visible"; return a = 1;
} else {
document.getElementById("majic").style.visibility = "visible"; document.getElementById("show").style.visibility = "hidden";

return a = 0;
}

}

</head>


<body>
<div class="text-success login">Login</div>
</div>

</nav>


<div class="container">
<div class="d-flex justify-content-around bg-white mb-3">

<div class="p-2 ">
<div class="dropdown">
<button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria- expanded="false">
Fruits
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<?php getFruits();
?>


<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<?php getCrops();
?>
</div>
</div>
</div>
</div>
</div>
<div class="container"> <img src="b4.jpeg" class="img-fluid firstimage d-block mx-auto" alt="Responsive image">
</div>
<br>
<br>

<div class="container">
<div class="text-center">
<h1 id="headings" class="guard"><span><b>Product Used For Fruits
</b></span>
</h1>
</div>
<hr>
<div class="row BigBox">
<?php
getFruitsHomepage();
?>


<hr>
</div>
<hr>
</div>
<br><br>
<div class="container">
<div class="text-center">
<h1 id="headings" class="guard"><span><b>Product Used For Vegetables
</b></span>
</h1>
</div>
<hr>
<div class="row BigBox">
<?php getVegetablesHomepage();
?>
<hr>
</div>
<hr>
</div>


<div class="container">
<div class="text-center">
<h1 id="headings" class="longguard"><span><b>Best Selling Products</b></span>
</h1>
</div>
<br>
<div class="row">
<?php cart();
getProducts();
?>
</div>
<br><br>
</div>
</div>
<section id="footer" class="myfooter">
<div class="container">
<div class="row text-center text-xs-center text-sm-left text-md-left">
<div class="col aligncenter">
<br>
<h5>Payment Option</h5>

<img src="../Images/Website/paytm1.jpg" alt="paytm">
<img src="../Images/Website/cod.jpg" alt="paytm" style="height:37px">
</div>
</div>


<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
<ul class="list-unstyled list-inline social text-center">
<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>

<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google- plus"></i></a></li>
<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
</ul>
</hr>
</div>
</section>
</body>
</html>
