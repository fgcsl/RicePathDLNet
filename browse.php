
<?php include("header.php");?>
 <div class="section-header wow fadeInUp">
          <h3>Browse</h3>
 </div>



<div class="container">
<div class="browser">
<div class="row">

<!-- PTI -->
<div class="col-md-4 col-lg-4">
<div class="card" style="width: 18rem;">
	<h4 class="text-center"><b>PAMP/MAMP</b></h4>
	<div class="browsebut card-body">
	<p>Number of Unique Genes<a data-toggle="modal" href="#" class="text-center btn btn-info" data-target="#pti_geneModal" >708</a></p>
     <p>Genes Interactions<a data-toggle="modal" href="#" class="text-center btn btn-warning" data-target="#pti_interaction_Modal">7788</a></p>
        <p>Modules<a href ="pti_modules.php" class="text-center btn btn-success" >39</a></p>
	<p>Hub Genes Fasta file<a href="pti_hub_seq.php" class="text-center btn btn-danger">104</a></p>
	</div>
</div>
</div>


<!--PTI Unique gene  Modal start-->
<div class="modal fade" id="pti_geneModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PTI Genes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                        <tr><th class="th-sm">Genes</th></tr>





<?php

include_once ("conn.php");

$sql= "SELECT * FROM pti_unique_genes";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );


while($rows = mysqli_fetch_array($result)) {
?>
<tr>
      <td><?php     echo $rows ["Gene_ID"];?></td>
  </tr>
<?php

}
  ?>

                </thead>
                </table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<!--PTI unique genes Modal -->

<!--PTI gene interactions Modal -->


<div class="modal fade" id="pti_interaction_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PTI Genes Interactions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


<div class="modal-body">

        <table class="table table-dark">
<thead> <tr>
      <th scope="col">Source</th>
      <th scope="col">Target</th>
    </tr>
  </thead>
<tbody>

<?php

include_once ("conn.php");

$sql= "SELECT * FROM pti_interaction_genes";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );


while($rows = mysqli_fetch_array($result)) {
?>
<tr>
      <td><?php     echo $rows ["Source"];?></td>
        <td><?php   echo $rows ["Target"];?></td>
  </tr>
<?php

}
  ?>

</tbody>
</table>

</div>


 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary">Download</button>
      </div>
    </div>
  </div>
</div>


<!-- PTI Gene Interaction Modal-->


        <!-- ########################## Xantho gene Interaction Modal ############################## -->

<div class="modal fade" id="xantho_interaction_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xanthomonas Genes Interactions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <table class="table table-dark">
<thead> <tr>
      <th scope="col">Source</th>
      <th scope="col">Target</th>
    </tr>
  </thead>
<tbody>

<?php


$sql= "SELECT * FROM xantho_interaction_genes";

$result = mysqli_query($conn,$sql) or die(mysqli_error () );

while($rows = mysqli_fetch_array($result)) {

?>
<tr>
      <td><?php     echo $rows ["Source"];?></td>
        <td><?php   echo $rows ["Target"];?></td>
  </tr>
<?php

}
  ?>

</tbody>
</table>
</div>


 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"> Download </button>
      </div>
    </div>
  </div>
</div>
<!-- ################################# Xantho Gene Interaction Modal End##################################### -->



<!-- PTI -->


<!-- Xantho -->
<div class="col-md-4 col-lg-4">
<div class="card" style="width: 18rem;">
        <h4 class="text-center"><b><i>XANTHOMONAS</i></b></h4>
        <div class="browsebut card-body">
        <p>Number of Unique Genes<a data-toggle="modal" data-target="#xantho_geneModal" href="#" class="text-center btn btn-info">886</a></p>
        <p>Genes Interactions<a  data-toggle="modal" data-target="#xantho_interaction_Modal" href="#" class="text-center btn btn-warning">9431</a></p>
        <p>Modules<a href="xantho_modules.php" class="text-center btn btn-success">39</a></p>
        <p>Hub Genes Fasta file<a href="xantho_hub_seq.php" class="text-center btn btn-danger btn-circle btn-sm">122</a></p>
	
        </div>
</div>
</div>


<!-- ##############################################  Xantho genes  Modal ##############################################  -->

<div class="modal fade" id="xantho_geneModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xanthomonas Genes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                        <tr><th class="th-sm">Genes</th></tr>

<?php

include_once ("conn.php");

$sql= "SELECT * FROM xantho_unique_genes";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );


while($rows = mysqli_fetch_array($result)) {
?>
<tr>
      <td><?php     echo $rows ["Gene_ID"];?></td>
  </tr>
<?php

}
  ?>



                </thead>
                </table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<!-- ########################################## Xantho Genes  Modal END #################################################-->









<!-- Xantho -->


<!-- Magno -->
<div class="col-md-4 col-lg-4">
<div class="card" style="width: 18rem;">
        <h4 class="text-center"><b><i>MAGNAPORTHE</i></b></h4>
        <div class="browsebut card-body">
        <p>Number of Unique Genes<a data-toggle="modal" data-target="#magna_geneModal" href="#" class="text-center btn btn-info">882</a></p>
        <p>Genes Interactions<a data-toggle="modal" data-target="#magna_interaction_Modal"  href="#" class="text-center btn btn-warning">15886</a></p>
        <p>Modules<a href="magna_modules.php" class="text-center btn btn-success btn-circle btn-sm">40</a></p>
        <p>Hub Genes Fasta file<a href="magna_hub_seq.php" class="text-center btn btn-danger btn-circle btn-sm">252</a></p>
        </div>
</div>
</div>

<!--magnaporthe gene  Modal -->

<div class="modal fade" id="magna_geneModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Magnoporthe Genes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<div class="modal-body">
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                        <tr><th class="th-sm">Genes</th></tr>


<?php

include_once ("conn.php");

$sql= "SELECT * FROM magno_unique_genes";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );


while($rows = mysqli_fetch_array($result)) {
?>
<tr>
      <td><?php     echo $rows ["Gene_ID"];?></td>
  </tr>
<?php

}
  ?>



</thead>
                </table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

    <!-- ################################ Magnaporthe gene Modal End ##############################-->


   <!-- ################################## Magno gene interactions Modal ########################################### -->

<div class="modal fade" id="magna_interaction_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Magnaporthe Genes Interactions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


<div class="modal-body">

        <table class="table table-dark">
<thead> <tr>
      <th scope="col">Source</th>
      <th scope="col">Target</th>
    </tr>
  </thead>
<tbody>
<?php

include_once ("conn.php");

$sql= "SELECT * FROM magno_interaction_genes";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );


while($rows = mysqli_fetch_array($result)) {
?>
<tr>
      <td><?php     echo $rows ["Source"];?></td>
        <td><?php   echo $rows ["Target"];?></td>
  </tr>
<?php

}
  ?>





</tbody>
</thead>
                </table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
               <!-- ############################# Magnaporthe gene interactions Modal ################################-->



<!-- Magno -->


</div>
</div>
</div>


<?php include("footer.php"); ?>
<style>
.browsebut a {
    margin-left: 8px;
}
</style>

