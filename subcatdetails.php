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

    <?php

$cnn=mysqli_connect("localhost","root","","mcaproject");
if(@$_GET["book_id"]){
    $id  = $_GET["book_id"];
     $uid = $_SESSION['userid'];
    $query = "INSERT INTO bookingdetails (bdid) VALUES ('$id') ";
    
     $query = "INSERT INTO bookingdetails (bdid,userid) VALUES ('$id','$uid')";

     //print_r($query);exit();
    $cnn->query($query);

    echo("<script>alert('Booking Successfully Done!🎁');</script>");
    echo("<script>location.href = 'order.php'</script>");
}

/*if(@$_GET["tid"])
{
    $id  = $_GET["tid"];
    $query = "DELETE FROM `booking` WHERE bid = '$id'";
    // print_r($query);exit();  
    $cnn->query($query);
    echo("<script>alert('Deleted Successfully Done!😎');</script>");
    echo("<script>location.href = 'index.php'</script>");

}*/
?>

    <h4 class="pink">

        <br>
        <br>
        <br>
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
                            <h3>Course Details</h3>
                        </div>
                    </div>
                </div>
                <div class="row">



                    </br>

<form action="#" id="loginForm" method="post">

<?php

@$id=$_GET["scatid"];
$cnn=mysqli_connect("localhost","root","","mcaproject");
$str4="select * from subcategory where scatid='$id'";
$result4=$cnn->query($str4);
$str4="";
while($row4=$result4->fetch_assoc())
{

$str4="     
    <div class='flexslider'>
        <div class='thumb-image'>
            <img src='img/".$row4["scatimg"]."' height='300' width='300' data-imagezoom='true' class='img-responsive'>
        </div>
    </div>
    
    <!-- flixslider -->
        <script defer src='js/jquery.flexslider.js'></script>
        <link rel='stylesheet' href='css/flexslider.css' type='text/css' media='screen' />
        
        <script>
        // Can also be used with $(document).ready()
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: 'slide',
                    controlNav: 'thumbnails'
                }); 
            });
        </script>
        <!-- flixslider -->
                </div>
                
        <div class='col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight' data-wow-delay='.5s'>
            <h5><br><span class='course_disc'>Course Name  : ".$row4["scatname"]."</span></h5></br>
            <h5><span class='course_disc'>Discription  : ".$row4["discription"]."</span></h5></br>
        </div>";
}


$str4.="</table>";
echo $str4;  
// print_r($_COOKIE);exit();


@$id=$_GET["scatid"];
$cnn=mysqli_connect("localhost","root","","mcaproject");
$str4="select * from booking where scatid='$id'";
$result4=$cnn->query($str4);
$str4="<table class='table table-striped table-bordered table-hover dataTable no-footer' id='dataTables-example' role='grid' aria-describedby='dataTables-example_info'>
<tr>
    <th>Date</th>
    <th>Day</th>
    <th>Time</th>
    <th>Duration</th>
    <th>Price</th>
    <th>Image</th>
    <th>Book Now</th></tr> ";
while($row4=$result4->fetch_assoc())
{
    $str4.="
    <tr>
        <td>".$row4["date"]."</td>
        <td>".$row4["day"]."</td>
        <td>".$row4["time"]."</td>
        <td>".$row4["duration"]."</td>
        <td>".$row4["price"]."</td>
        <td><img src='img/".$row4["scatimg"]."' height='100' width='100'>"."</td>
        <td><div class='occasion-cart'>
                <a class='btn btnSubmit' href='subcatdetails.php? book_id=".$row4['bid']."'>Book Now</a>
            </div>
        </td>
    </tr>";

}
$str4.="</table>";
echo $str4;


if(isset($_POST["btnSubmit"]))
{
$str="select * from subcategory where scatid='$scatid'";
$result=$cnn->query($str);
$str="";
$row=$result->fetch_assoc();
    $id=$row["scatid"];
  
    $bname=$row["scatname"];
    $date=$row["date"];
    $day=$row["day"];
    $time=$row["time"];
    $duration=$row["duration"];
    $price=$row["price"];
    $img=$row["scatimg"];
    
    $qry="insert into booking (scatid,scatname,date,day,time,duration,price,scatimg) values('$id','$bname','$date','$day','$time','$duration','$price','$img')";
    echo $qry;
    $result=$cnn->query($qry);
    echo "Booking Successfully";
    echo("<script>location.href = 'subcatdetails.php'</script>");
}


?>
    <br>


            </div>
        </div>

        </form>
<?php include_once("footer.php"); ?>