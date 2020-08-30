<?php
include_once("header11.php");
$cnn=mysqli_connect("localhost","root","","mcaproject");
 
if(@$_GET['key']){
    $value = $_GET['key'];
    $qry = "Select * from userregistration where username = '$value'";
    $result = $cnn->query($qry);
}

?>
<br>
<center>
<form method="post">
    <input type="text" name="name" id="name">
    <input type="submit" name="search_btn" id="send" value="Search">
</form></center></br>
<div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Our Users List
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">


<?php

if(!@$_GET['key']){
    $qry="Select * from userregistration";
    $result=$cnn->query($qry);
}
$str="
<table class='table table-striped table-bordered table-hover dataTable no-footer' id='dataTables-example' role='grid' aria-describedby='dataTables-example_info'><tr>
</tr> ";
//<table border='2' height='50%' wi dth='50%'><th>Category</th></tr>";
while($row=$result->fetch_assoc())
{
	$str.="<tr><td><a href='userdetails.php?userid=".$row["userid"]."'>"
.$row["username"]."</a></td></tr>";
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
include_once("footer11.php")
?>
<script type="text/javascript">
    $(document).ready(()=>{
        $("#send").on("click", () => {
                let value =  $("#name").val();
                $(location).attr('href',"http://localhost/academy/admin-panel/userlist.php?key="+value+"");
                return false;
                // window.location = `${window.location}?key=${value}`;
        });
    });
</script>