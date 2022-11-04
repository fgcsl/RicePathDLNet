<?php include("conn.php"); ?>

<div class="container">
<button> <a href="https://fgcsl.ihbt.res.in/RicePathDLNet/xantho_modules.php">Back </a></button>

<?php 
$gene_ontology = $_GET['md'];
$sql= "SELECT *,REPLACE(Genes, ',' , '\n' ) FROM xantho_module_with_genes WHERE Module='$gene_ontology'";


$result = mysqli_query($conn,$sql) or die(mysqli_error () );

while($rows = mysqli_fetch_array($result)) {
?>

<h4><?php  echo $rows ["Module"]. " "."<br>";?></h4>
       
<?php
$var= $rows ["Genes"]. " "."<br>";
$resStr = str_replace(',','<br />', $var);
print_r($resStr);

?>

<?php

}

?>

</div>
