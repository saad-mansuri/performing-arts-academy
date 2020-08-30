<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Academy - Acting Course </title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style1.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

<?php
	session_start();
	include_once("header1.php");
?>

<h4 class="pink">
<div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Our Courses</h2>
        </div>
    </div>

    <!-- ##### Top Popular Courses Area End ##### -->
    <div class="top-popular-courses-area mt-50 section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>The Best</span>
                        <h3>Top Popular Courses</h3>
                    </div>
                </div>
            </div>
            <div class="row">
	
	            	

  <?php
$cnn=mysqli_connect("localhost","root","","mcaproject");
$qry="Select * from category";
$result=$cnn->query($qry);
$str="<table class='table  table-bordered table-hover'>";
//$str="<table border='2' height='50%' width='50%'><th>Category</th></tr>";
while($row=$result->fetch_assoc())
{
	$str.="<div class='banner-bottom'>
		<div class='container'> 
			<div class='banner-bottom-grids'>
				<div class='banner-bottom-grid-left animated wow slideInLeft' data-wow-delay='.5s'>
					<div class='grid'>
						<figure class='effect-julia'>

						<a alt='' href='subcatview.php?cid=".$row["catid"]."'>
									 
							<img src='img/".$row["catimg"]."'>
							
							<figcaption>
								
								<div>
									
									<p>".$row["catname"]."</p>
								</div>
							</figcaption>			
						</figure>
					</div>
				</div>
			</div>
		</div>
    </div>"

;}

$str.="</table>";
echo $str;
?>
</div>
				</div>

<?php
include_once("footer.php");
?>