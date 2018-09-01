<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Registration</title>
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
          <a class="navbar-brand" href="practical14i.php">PHP</a>
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
                <h1><strong><span class="color">Practical # 14</span></strong></h1>                <p class="lead">Create <strong>student registration form</strong> using text box, check box,radio button, select, submit button. And display user inserted value in <strong>new PHP page.</strong></p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

    <!-- About Us Page==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row ">
                    <div class="col-lg-12">
                <center><h2><u>Student Registration</u></h2></center><br/><br/>
                 <form action="practical14ii.php" method="post">
                       <table align="center" width="30%" style="padding:30px; font-size:18px;">
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="txtName" size="30" required/></td>
                        </tr>
                        <tr><td>  </td></tr>
                        <tr>
                            <td>Address </td>
                            <td><input type="text" name="txtAdd"  size="30"/></td>
                        </tr>
                        <tr><td>  </td></tr>
                        <tr>
                            <td>Phone</td>
                            <td><input type="text" name="txtPhone"  size="30"/></td>
                        </tr>
                        <tr><td>  </td></tr>
                        <tr>
                            <td>Qualification </td>
                            <td><input type="text" name="mail"  size="30"></td>
                        </tr>
                        <tr><td>  </td></tr>
                        <tr>
                            <td>Interest Branch </td>
                            <td><select name="branch" style="width:278px;">
                                        <option value="Information Technology" size="30"> Information Technology</option>
                                        <option value="Computer Engineering" size="30"> Computer Engineering </option>
                                        <option value="Elecrical Engineering" size="30"> Elecrical Engineering </option>
                                    </select>
                            </td>
                        </tr>
                        <tr><td>  </td></tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                                <input type="radio" value="Male" name="gen"> Male</input>
                                <input type="radio" value="Female" name="gen"> Female</input>            </td>
                       </tr>
                        <tr><td>  </td></tr>
                        <tr>
                             <td>Area of interest</td>
                            <td>
                                <input type="checkbox" name="hobby[]" value="Networking"> Networking</input>
                                <input type="checkbox" name="hobby[]" value="Programming"> Programming</input>	<br/>
                                <input type="checkbox" name="hobby[]" value="Web Designing"> Web Designing</input>
                                <input type="checkbox" name="hobby[]" value="Hacking"> Hacking</input>	
                            </td>
                        </tr>
                        <tr><td>  </td></tr>
                        <tr align="center">
                            <td colspan="2"><input type="submit" value="Register"/>
                                            <input type="reset" value="Clear"/>
                            </td>
                        </tr>     
                      </table>
                  </form>
        
                 </div>
            </div>
    </div>

    <!-- Team Page==========================================-->
<div id="tf-team" class="text-center" >
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2><strong>Made by</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <center><div id="team" class="owl-carousel owl-theme row ">
						<div class="item">
							<div class="thumbnail">
                                <img src="img/me.jpg" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>Chirag Ramchandanee</h3>
                                    <p>Diploma IT (6<sup>th</sup> Semester)</p>
                                    <p>146230316091</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </center>
              </div>
        </div>
    </div>
  
    <nav id="footer">
        <div class="container">
           
         
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>

    <script src="js/owl.carousel.js"></script>

    <!-- Javascripts ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>