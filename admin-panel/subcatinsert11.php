<?php
session_start();
include_once("header11.php");
?>

<div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">


<?php
if(isset($_POST["btnSubmit"]))
{
	
	//print_r($_POST);
	
	$cname=$_POST["txtname"];
	$opt=$_POST["opt"];
	
	$img=$_FILES['file']['name'];
	$cnn=mysqli_connect("localhost","root","","mcaproject");

	$qry="insert into subcategory(scatname,scatisdisplay,scatimg)values('$cname','$opt','$img')";
	//echo "$qry";
	$file_type=$_FILES['file']['type'];
	$file_size=$_FILES['file']['size'];
	$file_tem_loc=$_FILES['file']['tmp_name'];
	$file_store="images\/".$img;
	$str="../../images/".$img;
	//echo $str;
	move_uploaded_file($file_tem_loc,$str);
	
	
	$result=$cnn->query($qry);
	echo("<script>location.href='subcatdisplay11.php'</script>");
	
}
?>



<br><br><br><h2>Insert New Class</h2></br>

<form name="a" method="post" enctype="multipart/form-data">
<table>


<tr><td><h4>Category Name</h4></td>
<td><input type="text" name="txtname"></td>
</tr>

<tr><td><h4>Image</h4></td>
<td><input type="file" name="file"></td>
</tr>
 
<tr><td><h4>Want to Display?</h4></td>
<td><input type="radio" name="opt" value="Yes"> Yes <input type="radio" name="opt" value="No"> No</td>
</tr>

<tr>
<td colspan="2"><h4><input type="submit" value="Submit" name="btnSubmit"></h4></td></tr>
</table>
</form>

</div>
</div>
</div>
</div>
<?php
include_once("footer11.php");
?>