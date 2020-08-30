
<?php 
//Define Variable


$firstname="";
$lastname="";
$contactno="";

//define Error Variables


$firstnameError="";
$lastnameError="";
$contactnoError="";

//when the submit button press do this

if(isset($_POST['submit']))
{

	$firstname=trim($_POST['fname']);
	$lastname=trim($_POST['lname']);
	$contactno=trim($_POST['contactno']);


	function checkFullname($firstname)
	{
		global $firstnameError;
		if (empty($firstname))
		{
			$firstnameError = "Please Enter your first name";
			return false;
		}
		else
		{
			$firstnameError = "Fullname All-Good";
			return true;
		}
	}

	function checkLastName($lastname)
	{
		global $lastnameError;
		if (empty($lastname))
		{
			$lastnameError = "Please Enter your first name";
			return false;
		}
		else 
		{
			$lastnameError = "Fullname All-Good";
			return true;
		}
	}


	function checkContactNumber($contactno)
	{
		global $contactnoError;
		if (empty($contactno))
		{
			$contactnoError = "Please Enter your Contact Number";
			return false;
		}
		else if(!preg_match("/^[0-9]+$/", $contactno))
		{
			$contactnoError = "Contact Number All-Good";
		}
		$contactnoError = "Please enter a valid contact number";
			return true;
	}

	function checkEmail($email)
	{
		global $emailError;
		if (empty($email))
		{
			$emailError = "Email is empty";
			return false;
		}
		else if(!preg_match("/^[_a-z 0-9-]+(\.[_a-z 0-9-]+)*@[a-z 0-9-]+(\.[a-z 0-9-]+)*(\.[a-z]{2,3})$/",$email))
			{
			$emailError = "Email is invalid";
		}
		$emailError = "Email Allgood";
			return true;
	}

	function checkAll($firstname,$lastname,$contactno)
	{
		if (checkFirstname($firstname) & checkLastName($lastname) & checkContactNumber($contactno))
		{
			header("Location: category.php");
			return true;
		}
		else 
		{
			echo "Failed";
			return false;
		}
	} 
	checkAll($firstname,$lastname,$contactno);
}
?>