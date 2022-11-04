<?php include("header.php"); ?>

<div class="container">
<div  class="head text-center">
<h3 id="vizu_head">Magnaporthe Hub Genes Protein Sequence</h3>
</div>
<?php
include_once ("conn.php");

$sql= "SELECT * FROM magno_hub_fasta";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );


while($rows = mysqli_fetch_array($result)) {
	
	echo $rows ["DATA"]. " "."<br>";

}

?>
</div>
