<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practical#16</title><?php
	include("header.php");
?>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="practical16i.php">PHP</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">Aim</a></li>
            <li><a href="#tf-about" class="page-scroll">Output</a></li>
            <li><a href="#tf-team" class="page-scroll">Made by</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page==========================================-->
    <div id="tf-home" style="background-image:url(img/04.jpg);" class="text-center">
        <div class="overlay">
            <div class="content">
              <h1><strong><span class="color">Practical # 16</span></strong></h1>                <p class="lead">Write two different PHP script to demonstrate <strong>passing variables through a URL.</strong></p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

    <!-- About Us Page==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
            <div align="center" style="font-size:18px"> 
   </center>
            
<?php 
	$a=intval($_GET['txtx']);
	$b=intval($_GET['txty']);
	if(isset($a) and isset($b)){
		if($a!=0 or $b!=0){
		echo "<h1>$a + $b = ";
		
		echo $a+$b."<br/>$a - $b = ";
		echo $a-$b."<br/>$a * $b = ";
		echo $a*$b."<br/>$a / $b = ";
		echo $a/$b."<br/>$a % $b = ";
		echo $a%$b."<br/>";
		
		echo "</h1>";
		}
		else{
			echo"<h3 style='color:red'> Enter any number</h3>"; 
		}
		
	}
?>	<br/><br/>
<?php
	include("footer.php");
?>