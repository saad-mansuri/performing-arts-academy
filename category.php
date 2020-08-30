<?php
session_start();
include_once("header1.php");
?>
<h4 class="pink">

<a href="#modal-table" role="button" class="green" data-toggle="modal"></a>

<?php
$cnn=mysqli_connect("localhost","root","","mcaproject");
$qry="Select * from category";
$result=$cnn->query($qry);
$str="<table class='table  table-bordered table-hover'>";
$str="<table border='2' height='50%' width='50%'><th>category</th></tr>";
while($row=$result->fetch_assoc())
{
	$str.="<div class='banner-bottom'>
		<div class='container'> 
			<div class='banner-bottom-grids'>
				<div class='banner-bottom-grid-left animated wow slideInLeft' data-wow-delay='.5s'>
					<div class='list'>
						<figure class='effect-julia'>
						
						<a alt='' href='subCategoryview1.php?cid=".$row["id"]."'>
									 
							<img src='img/".$row["catimage"]."'>
							
							<figcaption>
								
								<div>
									
									<p>".$row["catname"]."</p>
								</div>
							</figcaption>			
						</figure>
					</div>
				</div>
			</div>
		</div>
    </div>		
				";

	
}
$str.="</table>";
echo $str;
?>
