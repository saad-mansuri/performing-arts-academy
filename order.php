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
<html>
<body>
<center>
<br>
<br>
<br>
<br>	
<h3>ADMISSION REPORTS</h3>
</center>




<?php

$cnn=mysqli_connect("localhost","root","","mcaproject");
if(@$_GET["tid"])
{
    @$id  = $_GET["tid"];
    $str="DELETE FROM bookingdetails WHERE id = '$id'";
    // print_r($query);exit();  
    $cnn->query($str);
    echo("<script>alert('Cancel Successfully Done!😎');</script>");
    echo("<script>location.href='order.php'</script>");

}
?>


<?php
@$userid=$_SESSION["userid"];
$cnn=mysqli_connect("localhost","root","","mcaproject");
 $result=$cnn->query("SELECT booking.scatname,bookingdetails.bookingdate,bookingdetails.id from booking JOIN bookingdetails WHERE bookingdetails.bdid = booking.bid AND bookingdetails.userid = '{$userid}'");

$str="<br><table class='table  table-bordered table-hover'><tr>
<th><h5>Cancellation</h5></th>
<th><h5>Course Name</h5></th>
<th><h5>Date of Booking</h5></th></tr>";
while($row=@$result->fetch_assoc())
{
    $str.="<tr>
    <td><a href='order.php?tid=".@$row["id"]."'>cancel</a></td>
    <td>".$row["scatname"]."</td>
    <td>".$row["bookingdate"]."</td>
    </tr>";
}

$str.="</table>";
echo $str;
?>
</center>
</body>
</html>
<?php
include_once("Footer.php")
?>