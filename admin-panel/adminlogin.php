<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Performing Arts Academy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>		
		<font color="white"><h2> Admin </h2></font>

		<div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                  <font color="white">  <h3> LOGIN </h3></font>
                    
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="#" id="loginForm" method="post">
                            <div class="form-group">
                                
                                <input type="text" placeholder="Username" name="txtuname" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                
                                <input type="password" placeholder="Password" name="txtpass" class="form-control">
                                
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
										<input type="checkbox" class="i-checks"> Remember me </label>
                                
                            </div>
                            <button class="btn btn-success btn-block loginbtn" type="submit" value="insert record" name="btnSubmit">Login</button>
                            
                        </form>
                    </div>
                </div>
	

<?php
$Username="";
$Password="";
if(isset($_POST["btnSubmit"]))
{
$Username=$_POST["txtuname"];
$Password=$_POST["txtpass"];
$qry="Select * from admin where aname='$Username' and password='$Password'";
$con = mysqli_connect("localhost","root","","mcaproject");
echo $qry;
$result=$con->query($qry);

$cnt=mysqli_num_rows($result);

echo "<h1> visitcnt=$cnt </h1>";

if($cnt==1)
{
	$row=$result->fetch_assoc();
	session_start();
	$_SESSION["aid"] = $row["aid"];
	$_SESSION["aname"] = $Username;
	//header("Location:CatDisplay.php");
	echo("<script>location.href='catdisplay11.php'</script>");
}
else
{
	echo "<script>alert(Either 'User name or password is wrong')</script>";
}
}

?>
	