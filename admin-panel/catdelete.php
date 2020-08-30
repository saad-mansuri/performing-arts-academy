<?php
session_start();
include_once("header1.php");
?>

<div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <!--<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><label>Show <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label></div></div></div><div class="row"><div class="col-sm-12">-->
<?php
$cnn=mysqli_connect("localhost","root","","dbproject");
$catid=$_GET["Id"];
$catname="";
$isdisplay="";
$r1="";
$r2="";

if(isset($_POST["btnSubmit"]))
{
	
	$cnn=mysqli_connect("localhost","root","","mcaproject");
	$qry="Delete from category where catid=$catid";
	$result=$cnn->query($qry);
	echo("<script>Location.href='catdisplay11.php'</script>");
}

$qry="Select * from category where catid=$catid";
$result=$cnn->query($qry);
$row=$result->fetch_assoc();
$catname=$row['catname'];
$isdisplay=$row['catisdisplay'];
if($isdisplay=="Yes")
{
	$r1="Checked";	
}
else
{
	$r2="Checked";
}
?>


<br><br><br><h1>Delete the Class</h1></br>

<form name="a" method="post">
<table>


<tr><td><h4>Category Name </h4></td>
<td><input type="text" name="txtName" value="<?php echo $catname ;?>"></td>
</tr>
 
<tr><td><h4>Want to Display?</h4></td>
<td><input type="radio" name="opt" value="Yes" <?php echo $r1; ?>> Yes 
<input type="radio" name="opt" value="No" <?php echo $r2; ?>> No</td>
</tr>

<tr>
<td colspan="2"><h4><input type="submit" value="Delete record" name="btnSubmit"><h4></td></tr>

</table>
</form>

</div>
</div>
</div>
</div>
<?php
include_once("footer.php");
?>
