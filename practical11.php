<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Math Functions</title>
    <meta name="description" content="Spirit8 is a Digital agency one page template built based on bootstrap framework. This template is design by Robert Berki and coded by Jenn Pereira. It is simple, mobile responsive, perfect for portfolio and agency websites. Get this for free exclusively at ThemeForces.com">
    <meta name="keywords" content="bootstrap theme, portfolio template, digital agency, onepage, mobile responsive, spirit8, free website, free theme, themeforces themes, themeforces wordpress themes, themeforces bootstrap theme">
    <meta name="author" content="ThemeForces.com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
   <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="practical11.php">PHP</a>
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

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" style="background-image:url(img/04.jpg);" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1><strong><span class="color">Practical # 11</span></strong></h1>                <p class="lead">Write PHP script to demonstrate <strong>Math functions.</strong> </p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

    <!-- About Us Page
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
		<center><b>
             <table border="1" width="50%" align="center" cellspacing="70" cellpadding="20"> 
                <tr align="center" style="font-size:22px; font-weight:bold;">
                    <td colspan="3">Math Functions</td>
                </tr>
                <tr align="center" style="font-size:20px; font-weight:bold;">
                    <td>Input</td>
                    <td>Function</td>
                    <td>Output</td>
                </tr>
                <tr align="center">	
                    <td><?php echo 5?></td>
                    <td><?php echo "Abs"?></td>
                    <td><?php echo Abs(5)?></td>
                </tr>
                <tr align="center">	
                    <td><?php echo -5?></td>
                    <td><?php echo "Abs"?></td>
                    <td><?php echo Abs(-5)?></td>
                </tr>
                <tr align="center">	
                    <td><?php echo 1.1?></td>
                    <td><?php echo "ceil"?></td>
                    <td><?php echo ceil(1.1)?></td>
                </tr>
                <tr align="center">	
                    <td><?php echo 1.5?></td>
                    <td><?php echo "ceil"?></td>
                    <td><?php echo ceil(1.5)?></td>
                </tr>
                <tr align="center">	
                    <td><?php echo 1.9?></td>
                    <td><?php echo "ceil"?></td>
                    <td><?php echo ceil(1.9)?></td>
                </tr>
                <tr align="center">	
                    <td><?php echo 1.1?></td>
                    <td><?php echo "floor"?></td>
                    <td><?php echo floor(1.1)?></td>
                </tr>
                <tr align="center">	
                    <td><?php echo 1.5?></td>
                    <td><?php echo "floor"?></td>
                    <td><?php echo floor(1.5)?></td>
                </tr>
                <tr align="center">	
                    <td><?php echo 1.9?></td>
                    <td><?php echo "floor"?></td>
                    <td><?php echo floor(1.9)?></td>
                </tr>
                <tr align="center">	
                    <td><?php echo 1.1?></td>
                    <td><?php echo "round"?></td>
                    <td><?php echo round(1.1)?></td>
                </tr>
                <tr align="center">	
                    <td><?php echo 1.5?></td>
                    <td><?php echo "round"?></td>
                    <td><?php echo round(1.5)?></td>
                </tr>
                <tr align="center">	
                    <td><?php echo 1.9?></td>
                    <td><?php echo "round"?></td>
                    <td><?php echo round(1.9)?></td>
                </tr>
                
                <tr align="center">	
                    <td><?php echo '12.5 , 2'?></td>
                    <td><?php echo "fmod"?></td>
                    <td><?php echo fmod(12.5,2)?></td>
                </tr>
                <tr align="center">	
                    <td><?php echo '11,2,78,5'?></td>
                    <td><?php echo "min"?></td>
                    <td><?php echo min(11,2,78,5)?></td>
                </tr>	
                <tr align="center">	
                    <td><?php echo '11,2,78,5'?></td>
                    <td><?php echo "max"?></td>
                    <td><?php echo max(11,2,78,5)?></td>
                </tr>	
	            </table>
            	</b>
            </center>
            </div>
        </div>
    </div>


<?php 
	include("footer.php");
?>