



<?php
session_start();
include_once("header.php");
?>

<center><h2> Academy </h2></center>

<head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>
   <body>
<?php
 $con = mysqli_connect("localhost","root","","mcaproject");       

$username="";
$firstname="";
$lastname="";
$email="";
$password="";
$contactno="";
$gender="";

if(isset($_POST["btnsubmit"]))
{
         /* Change Code start */

   $x=1;
   
         if (empty($_POST["username"])) {
               $nameErr = "User Name is required";
            $x++;
         }


            if (empty($_POST["firstname"])) {
               $nameErr = "Name is required";
            $x++;
         }
            
           
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            $x++;
            }
               
               // check if e-mail address is well-formed
            
            
            if (empty($_POST["lastname"])) {
               $unameErr = "Last name Required";
               $x++;
            }
            
            if (empty($_POST["password"])) {
               $passErr = "Password is Required";
            $x++;
            }
            
            if (empty($_POST["contactno"])) {
               $contactErr = "Contact Number is Required";
            $x++;
            }
            if (empty($_POST["gender"])) {
               $gendererr = "Gender is Required";
            $x++;
            }
            
         
   if($x==1)
   {
   $username=$_POST["username"];     
   $firstname=$_POST["firstname"];
   $lastname=$_POST["lastname"];
   $email=$_POST["email"];
   $password=$_POST["password"];
   $contactno=$_POST["contactno"];
   $gender=$_POST["gender"];
   

   //$DOB=date("y-m-d");
   //$DOJ=$_POST["txtdoj"];
   //$gender=$_POST["opt"];
   
$qry="Insert into userregistration (username,fname,lname,email,password,contactno,gender) values('$username','$firstname','$lastname','$email','$password','$contactno','$gender')";

$result=$con->query($qry);

if(mysqli_query($con,$qry))
{
   echo "<script>
   alert('Registration Sucessfully');
   </script>";
   echo "<script>windows.location.href='login1.php';</script>";
}
else
{
   echo "<script>
   alert('Opps Somthing wents wrong...!!');
   windows.location.href='registration.php';
   </script>";
}

mysqli_close($con);

   }      
        
       /*  function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }*/


         /* Change Code End */
}      
 ?>     
<div class="register">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Register Here</h3>
			
			<div class="login-form-grids">
				
					<form method="post" action ="<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
            
               <tr>
               <td>User Name:</td>
               <td><input type = "text" name = "username">
                  <span class = "error">* <?php echo @$nameErr;?></span>
               </td>
            </tr>

            <tr>
               <td>First Name:</td>
               <td><input type = "text" name = "firstname">
                  <span class = "error">* <?php echo @$nameErr;?></span>
               </td>
            </tr>
 

            <tr>
               <td>Last Name: </td>
               <td><input type = "text" name = "lastname">
                  <span class = "error">* <?php echo @$unameErr;?></span>
               </td>
            </tr>
             
            <tr>
               <td>E-mail: </td>
               <td><input type = "Email" name = "email">
                  <span class = "error">* <?php echo @$emailErr;?></span>
               </td>
            </tr>
            <tr>
               <td>Contact no: </td>
               <td>
                  <input type = "text" name = "contactno">
                  <span class = "error">* <?php echo @$contactErr;?></span>
               </td>
            </tr>
           
            <tr>
               <td>Password:</td>
               <td> <input type = "password" name = "password">
                  <span class = "error"><?php echo @$passErr;?></span>
               </td>
            </tr>
            <td>
               Gender
            </td>     
            <td>
               <input type="radio" name="gender" value="male"> Male
               <input type="radio" name="gender" value="female"> Female
               <br>
               <span class = "error">* <?php echo @$gendererr  ;?></span>
            </td> 
         </tr>	
         <tr>              
			<td>
               <input type = "submit" name = "btnsubmit" value = "Register" > 
            </td>
			<tr>	
         </table>

					</form>
				
			</div>
			
		</div>
	</div>
</body>
</html>
<script type="text/javascript">

</script>
