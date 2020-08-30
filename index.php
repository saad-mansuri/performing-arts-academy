
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

    <!-- ##### Header Area Start ##### -->
    <?php
        session_start();
        include_once("header1.php");
    ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <?php include_once "view/heroArea.php"  ?>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Feature Area Start ##### -->
        <?php include_once "view/topFeatureArea.php" ?>
    <!-- ##### Top Feature Area End ##### -->

    <!-- ##### Course Area Start ##### -->
    <?php include_once "view/courseArea.php" ?>
    <!-- ##### Course Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
        <?php include_once "view/testimonialArea.php" ?>
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Top Popular Courses Area Start ##### -->
    
    <!-- ##### Top Popular Courses Area End ##### -->
    <br>
    <br>
    <br>
    <br>
    <!-- ##### Partner Area Start ##### -->
    <?php include_once "view/partnerArea.php" ?>
    <!-- ##### Partner Area End ##### -->


</html>
</html>
<?php
include_once("footer.php");
?>



