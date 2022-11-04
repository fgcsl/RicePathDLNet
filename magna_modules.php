<?php include("header.php"); ?>

<div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Magnaporthe Modules</h3>
        </div>


<table class="table table-bordered">
  <thead class="">
    <tr>

      <th scope="col">Module</th>
      <th scope="col">GO</th>
      <th scope="col">Description</th>
	<th scope="col">Response</th>
	<th scope="col">Number Of Genes</th>
    </tr>
  </thead>
<tbody>

<?php

include_once ("conn.php");

$sql= "SELECT * FROM MAGNO_modules_table";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );


while($rows = mysqli_fetch_array($result)) {
?>
<tr>
      <td><?php echo $rows ["Module"];?></td>
      <td><?php echo $rows ["GO"];?></td>
      <td><?php echo $rows ["Description"];?></td>
      <td><?php echo $rows ["Response"];?></td>
	<td><a href='magna_module_genes.php?md=<?php echo $rows["Module"];?>' class="btn btn-info">Genes</a></td>


  </tr>
<?php

}

  ?>

</tbody>

</table>
</div>

<?php include("footer.php"); ?>

