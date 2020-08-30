<?php
session_start();
include_once("header1.php");
?>			
<center><h2> User </h2></center>

<div class="login">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Login Form</h3>
			
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form method="post">
					
					<input type="text" name="txtaname" placeholder="Admin Name :"required=" " >
					<input type="password" name="txtpassword" placeholder="Password :" required=" " >
					<div class="forgot">
						<a href="#">Forgot Password?</a>
					</div>
					<input type="submit" name="btnSubmit" value="Login">
				</form>
			</div>
			<h4 class="animated wow slideInUp" data-wow-delay=".5s">For New User</h4>
			<center><p class="animated wow slideInUp" data-wow-delay=".5s"><a href="newuserregistration1.php">Register Here</a> </p></center>
		</div>
	</div>

	

<?php
$Username="";
$Password="";
if(isset($_POST["btnSubmit"]))
{
$Username=$_POST["txtaname"];
$Password=$_POST["txtpassword"];
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
	echo("<script>location.href='catdisplay.php'</script>");
}
else
{
	echo "<script>alert(Either 'User name or password is wrong')</script>";
}
}

?>

