<?php
include_once("header11.php")
?>

<br>
<Br>
<Br>

<?php
$id=$_GET["userid"];
$cnn=mysqli_connect("localhost","root","","mcaproject");
$str4="select * from userregistration where userid='$id'";
$result4=$cnn->query($str4);
$str4="";
while($row4=$result4->fetch_assoc())
{
$str4="<font color='white'><h5><tr><td colspan='3'><br><img src='images/".$row4["userimg"]."' height='200'width='200'>".
"<br><br>First Name : ".$row4["fname"]."<br><br>Last Name : ".$row4["lname"]."<br><br>Date Of Birth : ".$row4["dob"]."
<br><br>Contact Number : ".$row4["contactno"]."<br><br>Email Id : ".$row4["email"]."
<br><br>Gender : ".$row4["gender"]."<center><a style='color:white' href='userorder.php?Id=".$row4['userid']."'>orders</a></center></td></tr></h5>
</font>";
}

$str4.="</table>";
echo $str4;  
/*if(isset($_POST["btnSubmit"]))
{
$str4="select * from employee1 where eid='$id'";
$result4=$cnn->query($str4);
$str4="";
$row4=$result4->fetch_assoc();
	$id=$row4["eId"];
	$fname=$row4["fName"];
	$lname=$row4["lName"];
	//$qty=$_POST["size"];
	//$pq=$price*$qty;
	$empimg=$row4["empimg"];
	
	$qry="insert into tempcart (pId,pName,pPrice,qty,pq,pimg) values('$id','$pname','$price','$qty','$pq','$pimg')";
	echo $qry;
	$result=$cnn->query($qry);
	echo "insert successfully";
	echo("<script>location.href='tempcart.php'</script>");
}*/


?>

<?php
include_once("footer11.php")
?>