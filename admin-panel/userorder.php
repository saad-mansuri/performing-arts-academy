<?php
//session_start();
include_once("header11.php");
?>


<div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Order Reports
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">


<?php									
$id=$_GET["Id"];
$cnn=mysqli_connect("localhost","root","","mcaproject");
$str4="select * from userregistration where userid='$id'";
$result4=$cnn->query($str4);
$str4="";
while($row4=$result4->fetch_assoc())
{
$str4="<h5><tr><td colspan='3'>
<br>First Name:-".$row4["fname"]."<br>Last Name:-".$row4["lname"]."
</td></tr></h5>";
}
$str4.="</table>";
echo $str4;  
?>
									
<?php
$id=$_GET["Id"];
//$eId=$_SESSION["eid"];
$cnn=mysqli_connect("localhost","root","","mcaproject");
$qry="select * from bookingdetails where userid=$id";
$result=$cnn->query($qry);
$str="<table class='table  table-bordered table-hover'><tr><th>Bookings Id</th>
<th>Date Of Order</th><th>User Id</th></tr>";
while($row=$result->fetch_assoc())
{
	$str.="<tr>
	<td>".$row["id"]."</td><td>".$row["bookingdate"]."</td><td>".$row["userid"]."</td>";
}
$str.="</table>";
echo $str;
?>

</div>										
										</div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>


<?php
include_once("Footer11.php")
?>