<?php
include_once("header1.php");
?>	
<br>
<br>

<?php
$cnn=mysqli_connect("localhost","root","","mcaproject");
@$id=$_GET["bid"];
$scatname="";
//$productdelete="";
$r1="";
$r2="";

if(isset($_POST["btnSubmit"]))
{
	
	$cnn=mysqli_connect("localhost","root","","mcaproject");
	$qry="Delete from booking where bid=$id";
	$result=$cnn->query($qry);
	echo("<script>location.href='subcatdetails.php'</script>");
	


$qry="Select * from booking where bid=$id";
$result=$cnn->query($qry);
//echo $qry;
$row=$result->fetch_assoc();
$scatname=$row['scatname'];
}
/*$productdelete=$row['deleteproduct'];
if($productdelete=="Yes")
{
	$r1="Checked";	
}
else
{
	$r2="Checked";
}*/
?>
<br>
<br>

<h2>Course delete</h2>

<form name="a" method="post">

<tr><td>Course Name</td>
<br>
<br>
<td><input type="text" name="scatname" value="<?php echo $scatname ;?>"></td>
</tr>
 
<!--<tr><td>Want to buy?</td>
<td><input type="radio" name="opt" value="Yes" <?php echo $r1; ?>> Yes 
<input type="radio" name="opt" value="No" <?php echo $r2; ?>> No</td>
</tr>-->

<tr>
<br>
<br>
<td colspan="2"><input type="submit" value="Delete record" name="btnSubmit"></td></tr>

</form>

<?php
include_once("footer.php");
?>
