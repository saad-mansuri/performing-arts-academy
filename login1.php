
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




<?php
session_start();

include_once("header.php");
?>			


<div class="login">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">User Login</h3>
			
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form method="post">
					
					<input type="text" name="txtuname" placeholder="Username :"required=" " >
					<input type="password" name="txtpass" placeholder="Password :" required=" " >
					<div class="forgot">
						<a href="#">Forgot Password?</a>
					</div>
					<input type="submit" name="btnSubmit" value="Login">
				</form>
			</div>
			<h4 class="animated wow slideInUp" data-wow-delay=".5s">For New User</h4>
			<center><p class="animated wow slideInUp" data-wow-delay=".5s"><a href="registration.php">Register Here</a> </p></center>
		</div>
	</div>

	

<?php
$Username="";
$Pwd="";

if(isset($_POST["btnSubmit"]))
{
$Username=$_POST["txtuname"];
$Pwd=$_POST["txtpass"];
$qry="select * from userregistration where username='$Username' and password='$Pwd'";
$con = mysqli_connect("localhost","root","","mcaproject");
echo $qry;
$result=$con->query($qry);


$cnt=mysqli_num_rows($result);

echo "<h1> $cnt </h1>";

if($cnt==1)
{
	$row=$result->fetch_assoc();
	$_SESSION["userid"]=$row["userid"];
	$_SESSION["username"] = $Username;

	   
/*	$row=$result->fetch_assoc();
	$_SESSION["iconv(in_charset, out_charset, str)d"]=$row["userid"];
	$_SESSION["username"] = $row["username"];
	$_SESSION["password"] = $row["password"];
	$_SESSION["fname"] = $row["fname"];
	$_SESSION["lname"] = $row["lname"];
	$_SESSION["contactno"] = $row["contactno"];
	$_SESSION["email"] = $row["email"];
	$_SESSION["gender"] = $row["gender"];

	// setcookie("id",$row["userid"]);
	// setcookie("fname",$row["fname"]);
	// setcookie("lname",)*/

	echo("<script>location.href='index.php'</script>");

	
}
else
{
	echo "<script>alert('either usenamr or password is worng')</script>";
}
}
?>


