
<?php include ("header.php"); ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script defer type='text/javascript' src='js/dynamicpage.js'></script>

</head>

<title>Magno Data</title>

<section class="browse">
<div class="b-head text-center">
	<h1><b>Browse</b></h1>
</div>

<!------ magno ---------->

<div class="counter">
        <h2 id="magnoo">Magnaporthe</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="genes">
                    <p  data-toggle="modal" data-target="#magna_geneModal" class="counter-count"class="counter-count">882</p>
                    <p class="gene-p">Genes</p>
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







            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="interactions">
                    <p data-toggle="modal" data-target="#magna_interaction_Modal" class="counter-count">15886</p>
                    <p class="interactions-p">Gene-Interactions</p>
                </div>
            </div>



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




            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="module">
                    <p data-toggle="modal" data-target="#magna_modules_Modal" class="counter-count">40</p>
                    <p class="module-p">Modules</p>
                </div>
            </div>
<!--
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="mmi">
                    <p class="counter-count">04</p>
                    <p class="mmi-p">Module-Module Intractions</p>
                </div>
            </div>-->
        </div>
    </div>
</div>



<!------ ###################################### Magno Module Model Start ########################################## ---------->
<!--Magna Module Modal -->
<div class="modal fade" id="magna_modules_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Magnaporthe Modules</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<!-- ###################################################### modal-body Ends ################################################    -->

 <div class="modal-body">
 
      <p scope="col">Select Function to see Module informations</p>
 <!-- Defence Response  -->
    <div data-role="main" class="ui-content">
    <div data-role="collapsible">
      <h1>Defence Response</h1>

<div data-role="collapsible">
<h1>Module 54  <span> (GO:0016192)</span></h1>

<?php

$sql= "SELECT * FROM magno_modules LIMIT 15";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

while($rows = mysqli_fetch_array($result)) {
?>

      <li><?php     echo $rows ["M_54"];?></li>

<?php

}
  ?>


</div>

<div data-role="collapsible">
<h1>Module 119  <span> (GO:0006888)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 7";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_119"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 135  <span> (GO:0006888)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 6";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_135"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 136  <span> (GO:0006508)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 6";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_136"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 172  <span> (GO:0009081)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 5";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_172"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 212  <span> (GO:0006974)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_212"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 251  <span> (GO:0006471)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_251"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 261 <span> (GO:0016192)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_261"];?></li>

<?php
}
?>

</div>



    </div>
  </div>



 <!--  Signal_Transduction  -->
    <div data-role="main" class="ui-content">
    <div data-role="collapsible">
      <h1>Signal Transduction</h1>

<div data-role="collapsible">
<h1>Module 3 <span> (GO:0006468)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 130";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_3"];?></li>

<?php
}
?>

</div>


<div data-role="collapsible">
<h1>Module 5 <span> (GO:0006468)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 94";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_5"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 7 <span> (GO:0006468)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 64";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_7"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 21 <span> (GO:0006468)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 30";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_21"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module  27<span> (GO:0016310)</span></h1>

<?php
$sql= "SELECT * FROM magno_modules LIMIT 25";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_27"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 57 <span> (GO:0007264)</span></h1>

<?php
$sql= "SELECT * FROM magno_modules LIMIT 14";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_57"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 58 <span> (GO:0006468)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 14";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_58"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 80 <span> (GO:0006468)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 10";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_80"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 120 <span> (GO:0006468)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 7";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_120"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 205 <span> (GO:0032312)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_205"];?></li>

<?php
}
?>



</div>

    </div>
  </div>

 <!-- Transcriptional Regulation  -->
    <div data-role="main" class="ui-content">
    <div data-role="collapsible">
      <h1>Transcriptional Regulation</h1>
<div data-role="collapsible">
<h1>Module 1 <span> (GO:0045449)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_1"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 31 <span> (GO:0016071)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 22";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_31"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 36 <span> (GO:0010468)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 19";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_36"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 142 <span> (GO:0010468 )</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 6";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_142"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 196 <span> (GO:0006396)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_196"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 200 <span> (GO:0016072)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_200"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 234 <span> (GO:0045449 )</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_234"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 238 <span> (GO:0010468)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_238"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 253 <span> (GO:0006366)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_253"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 262 <span> (GO:0006351)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_262"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 300 <span> (GO:0045449)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_300"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 301 <span> (GO:0006350)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_301"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 314 <span> (GO:0006350)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_314"];?></li>

<?php
}
?>
</div>

    </div>
  </div>

 <!-- Growth or Development  -->
    <div data-role="main" class="ui-content">
    <div data-role="collapsible">
      <h1>Growth or Development</h1>

<div data-role="collapsible">
<h1>Module 50 <span> (GO:0022403)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 16";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_50"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 92 <span> (GO:0032502)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 9";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_92"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 138 <span> (GO:0006412 )</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 6";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_138"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 174 <span> (GO:0006168)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 5";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_174"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 225 <span> (GO:0009127)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_225"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 308 <span> (GO:0031326)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_308"];?></li>

<?php
}
?>
</div>




    </div>
  </div>

 <!-- Hormone  -->

    <div data-role="main" class="ui-content">
    <div data-role="collapsible">
      <h1>Hormone</h1>


<div data-role="collapsible">
<h1>Module 46 <span> (GO:0008202)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 17";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_46"];?></li>

<?php
}
?>
</div>


<div data-role="collapsible">
<h1>Module 235 <span> (GO:0009725)</span></h1>
<?php
$sql= "SELECT * FROM magno_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_235"];?></li>

<?php
}
?>

</div>


    </div>
  </div>



</div>


<!-- #### modal-body Ends ####    -->


 <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<!-- ######################## Magna modules Modal ########################### -->

<!------ ############################# Magno Module Model End ################################ ---------->




<!------ ###################################### Magno Module Model ########################################## ---------->


<!-- #################################################################################################################################### -->
<!------ ###################################### Magno Hub Genes Fasta Files ########################################## ---------->
<!-- #################################################################################################################################### -->

<div class="text-center">
<h2>Magnoporthe Hub Genes</h2>

<div class="container">
<div class="row"> 
                 
	<div class="col-md-4">
	<p></p>
	</div>

	<div class="col-md-4">
<!-- Button trigger modal -->
	Protein Sequence <a href="magna_hub_seq.php" >View </a>
	</div>

	<div class="col-md-4">

	</div>

</div>
</div>

</div>

</section>

<script>

$('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });


</script>



<style>

.ui-collapsible-content.ui-body-inherit li {
    list-style: decimal;
    padding: 2px;
}

</style>


<?php include("footer.php");?>
