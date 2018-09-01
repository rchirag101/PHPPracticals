<?php 
setcookie("username","chirag",time()+3600);
/*	if(isset($_POST['user'])){
		if($_POST['user']=="chirag"){
			setcookie("username","chirag",time()+3600);
			header("location:pra18ii.php");		
		}	
		else{
			header("location:pra18i.php?error=invalid data");
		}	
	}*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practical#18 cookie</title>
    <?php
	include("header.php");
?>    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="pra18i.php">PHP</a>
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
              <h1><strong><span class="color">Practical # 18</span></strong></h1>                <p class="lead">Write two different PHP script to demonstrate <strong>passing variables with cookie.</strong></p>
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
   <h1>Login</h1>
 <form method="post" action="pra18ii.php">
	
    <input type="text"  name="user" placeholder="Enter username"/>
    <input type="password" name="pwd" placeholder="Enter password"/>
    <input type="submit" value="Login"/>
    <?php
     	if(isset($_REQUEST['error'])){
			echo $_REQUEST['error'];
		}	 	
	 ?>  
</form>  <br/><br/>        
<?php
	include("footer.php");
?>