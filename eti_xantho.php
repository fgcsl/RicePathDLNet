
<?php include ("header.php"); ?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>




<section class="browse">
<div class="b-head text-center">
	<h1><b>Browse</b></h1>
</div>


<!------ Xantho ---------->


<div id="xantho" class="counter">
        <h2>Xanthomonas</h2>
    <div class="container">
        <div class="row">
    
           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="genes">
                   <p   data-toggle="modal" data-target="#geneModal" class="counter-count">886</p>
                    <p class="gene-p">Genes</p>
                </div>
            </div>

<!-- ##############################################  Xantho genes  Modal ##############################################  -->

<div class="modal fade" id="geneModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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




            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="interactions">
                    <a href=""><p data-toggle="modal" data-target="#xantho_interaction_Modal" class="counter-count">9431</p></a>
                    <p class="interactions-p">Gene-Interactions</p>
                </div>
            </div>



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


            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="module">
                    <p data-toggle="modal" data-target="#xantho_modules_Modal" class="counter-count">39</p>
                    <p class="module-p">Modules</p>
                </div>
            </div>

    </div>
</div>
</div>



<!------ ################################################# Xantho Modules Modle ############################## ---------->



<!--Xantho gene Interaction Modal -->
<div class="modal fade" id="xantho_modules_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xanthomonas Modules</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

 <div class="modal-body">
 
   <p scope="col">Select Function to see Module informations</p>
 <!-- Defence Response  -->
    <div data-role="main" class="ui-content">
    <div data-role="collapsible">
      <h1>Defence Response</h1>
     
<div data-role="collapsible">
<h1>Module 24  <span> (GO:0031497 )</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 26";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_24"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 69 <span> (GO:0030029 )</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 11";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_69"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 172 <span> (GO:0009081 )</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 5";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_172"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 261 <span> (GO:0016192)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_261"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 289 <span> (GO:0006914 )</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_289"];?></li>

<?php
}
?>


</div>


    </div>
  </div>


 <!-- Signal Response  -->
    <div data-role="main" class="ui-content">
    <div data-role="collapsible">
      <h1>Signal Transduction</h1>
     
<div data-role="collapsible">
<h1>Module 7  <span> (GO:0006468)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 64";
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
$sql= "SELECT * FROM xantho_modules LIMIT 30";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_21"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 58 <span> (GO:0006468)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 14";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_58"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 71  <span> (GO:0007264)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 11";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_71"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 80 <span> (GO:0006468)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 10";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_80"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 86 <span> (GO:0046488)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 10";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_86"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 116 <span> (GO:0032012 )</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 7";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_116"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 206  <span> (GO:0007165)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_206"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 224 <span> (GO:0045454)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_224"];?></li>

<?php
}
?>


</div>


 </div>
 </div>
 
<!--  Transcriptional Regulation -->
    <div data-role="main" class="ui-content">
    <div data-role="collapsible">
      <h1>Transcriptional Regulation</h1>
     

<div data-role="collapsible">
<h1>Module 2 <span> (GO:0006350)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 291";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_2"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 4 <span> (GO:0045449)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 98";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_4"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 13  <span> (GO:0045449)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 48";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_13"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 14 <span> (GO:0045449)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 44";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_14"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 26 <span> (GO:0006352)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 26";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_26"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 32 <span> (GO:0010468)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 22";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_32"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 34 <span> (GO:0045449)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 21";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_34"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 36 <span> (GO:0010468)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 19";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_36"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 68 <span> (GO:0006396 )</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 12";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_68"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 72  <span> (GO:0006355)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 11";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_72"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 79 <span> (GO:0006350)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 11";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_79"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 109  <span> (GO:0016071)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 8";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_109"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module  131<span> (GO:0043631)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 6";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_131"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 238  <span> (GO:0010468)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_238"];?></li>

<?php
}
?>

</div>


<div data-role="collapsible">
<h1>Module 245 <span> (GO:0006351 )</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_245"];?></li>

<?php
}
?>


</div>


<div data-role="collapsible">
<h1>Module 301 <span> (GO:0006350)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_301"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 307  <span> (GO:0006351)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_307"];?></li>

<?php
}
?>



</div>

    </div>
  </div>

 <!-- Growth Development -->

 <div data-role="main" class="ui-content">
    <div data-role="collapsible">
      <h1>Growth or Development</h1>


<div data-role="collapsible">
<h1>Module 50 <span> (GO:0022403)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 16";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_50"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 85  <span> (GO:0009058 )</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 10";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_85"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 95 <span> (GO:0006793)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 8";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_95"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 174  <span> (GO:0006168)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 5";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_174"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 191  <span> (GO:0031326 )</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_191"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 201 <span> (GO:0009058 )</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_201"];?></li>

<?php
}
?>


</div>

<div data-role="collapsible">
<h1>Module 290 <span> (GO:0022403 )</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_290"];?></li>

<?php
}
?>

</div>


  </div>
  </div>
 <!--Hormone -->
    <div data-role="main" class="ui-content">
    <div data-role="collapsible">
      <h1>Hormone</h1>
 
<div data-role="collapsible">
<h1>Module 235 <span> (GO:0009725)</span></h1>
<?php
$sql= "SELECT * FROM xantho_modules LIMIT 4";
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



 <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<!--Xantho modules Modal -->






<!------ ################################################# Xantho Modules Modle End ############################## ---------->

<!------ ######################################## Xantho End #################################################### ---------->





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

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<?php include 'footer.php'; ?>
