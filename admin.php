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
					
					<input type="text" name="txtuname" placeholder="Username :"required=" " >
					<input<a href="#">Forgot Password?</a>
					</div>
					<inp type="password" name="txtpass" placeholder="Password :" required=" " >
					<div class="forgot">
						
			<h4 class="animated wow slideInUp" data-wow-delay=".5s">For New User</h4>
			<centerut type="submit" name="btnSubmit" value="Login">
				</form>
			</div>><p class="animated wow slideInUp" data-wow-delay=".5s"><a href="newuserregistration1.php">Register Here</a> </p></center>
		</div>
	</div>

	

<?php
$username="";
$Pwd="";
if(isset($_POST["btnSubmit"]))
{
$username=$_POST["txtuname"];
$pwd=$_POST["txtpass"];
$qry="Select * from login where username='$username' and password='$pwd'";
$con = mysqli_connect("localhost","root","","mcaproject");
echo $qry;

$result=$con->query($qry);

$cnt=mysqli_num_rows($result);

echo "<h1> $cnt </h1>";

if($cnt==1)
{
	$row=$result->fetch_assoc();
	
	$_SESSION["id"]=$row["id"];
	$_SESSION["username"] = $uname;

		//echo "Edi = ".$_SESSION["eid"]." Uname = ".$_SESSION["eUname"];

	//header("Location:Category.php");
	echo("<script>location.href='category.php'</script>");
}
else
{
	echo "<script>alert('either usenamr or password is worng')</script>";
}
}

?>

