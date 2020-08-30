<?php
include_once("header11.php");
?>

<div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">




<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Performing Arts Academy</title>
</head>
<form method="post">
  <table>
<tr>
<td>
    <input type="submit" value="Print" name="submit">
	


<br>
<br>
Today's Report: <input type="date" name="date">
<!--End Date: <input type="date" name="date1">-->
<input type="submit" name="submit" />

</td>
</tr>
</table>
    
</form>


<?php

$fromdate="";
if(isset($_POST["submit"]))
{
$fromdate=$_POST["date"];
$fromdate = "'$fromdate'";

$cnn=mysqli_connect("localhost","root","","mcaproject");
//$qry="select * from booking,userregistration,bookingdetails where booking.scatid=userregistration.userid and bookingdetails.bid=bookingdetails.id and booking.bookingdate '$todate'"; 
//echo $qry;
$qry = "SELECT * FROM `bookingdetails` WHERE bookingdate = ".(String)$fromdate;
$result=$cnn->query($qry);

$str="<table class='table table-striped table-bordered table-hover dataTable no-footer' id='dataTables-example' role='grid' aria-describedby='dataTables-example_info'><tr>
<th>ID</th>
<th>BOOKIND ID</th>
<th>BOOKING DATE</th>
<th>USER ID</th>
</tr>";
while($row = @$result->fetch_assoc())
{
	$str.="<tr>
	<td>".$row["id"]."</td>
	<td>".$row["bdid"]."</td>
	<td>".$row["bookingdate"]."</td>
	<td>".$row["userid"]."</td>
	
	
	

</tr>
	";
	
	
	
}
$str.="</table>";
echo $str;
	
	
}

?>
</table>

</div>										
										</div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>


<?php
include_once("footer11.php");
?>

