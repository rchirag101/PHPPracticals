<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practical#23 Table</title>
    <?php
	include("header.php");
?>    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="pra23.php">PHP</a>
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
              <h1><strong><span class="color">Practical # 23</span></strong></h1>                <p class="lead">Write a program to <strong>edit name of customer to “Bob” with cust_no =1, and to delete record with cust_no=3.</strong></p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

    <!-- About Us Page==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
            <div align="center" style="font-size:18px"> 
   </center><h1 >Table : Customer</h1>
<?php
	
	$con=mysqli_connect("localhost","root","","test"); //this is connection variable that connect mysql database 
	//syntax : mysqli_connect(host,user,password,databaseName)
	
	$up=mysqli_query($con,"update customer set cust_name='Bob' where cust_id=1");
	$del=mysqli_query($con,"delete from customer where cust_id=3");
	
	$res=mysqli_query($con,"select * from customer");
	
	echo "After update<table border='' cellpadding='10px' width='100%'>";
	echo "<tr>
			<th>Customer Number</th>
			<th>Customer Name</th>
			<th>Item Purchased</th>
			<th>Mobile Number</th>
		 </tr>";
	
	while($row=mysqli_fetch_row($res)){
		echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
	}
	
	echo "</table>";
	
	mysqli_close($con);
?><br/><br/>        
<?php
	include("footer.php");
?>