<?php include("header.php"); ?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script defer type='text/javascript' src='js/dynamicpage.js'></script>

</head>



<title>PTI Data</title>


<section class="browse">
<div class="b-head text-center">
        <h1><b>Browse</b></h1>
</div>




<!------ PTI ---------->

<div id= "PTI" class="counter">
        <h2>PTI</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="genes">
                    <p data-toggle="modal" data-target="#pti_geneModal" class="counter-count">708</p>
                    <p class="gene-p">Genes</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="interactions">
                    <p data-toggle="modal" data-target="#pti_interaction_Modal"  class="counter-count">7788</p>
                    <p class="interactions-p">Gene-Interactions</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="module">
                    <p  data-toggle="modal" data-target="#PTI_modules_Modal"  class="counter-count">39</p>
                    <p class="module-p">Modules</p>
                </div>
            </div>
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




<!--Magna Module Modal -->
<div class="modal fade" id="PTI_modules_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PTI Modules</h5>
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
<h1>Module 54 <span> (GO:0016192)</span></h1>

<?php

$sql= "SELECT * FROM pti_modules LIMIT 15";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

while($rows = mysqli_fetch_array($result)) {
?>

      <li><?php     echo $rows ["M_54"];?></li>
  
<?php

}
  ?>

</div>

<div data-role="collapsible">
<h1>Module 119 <span> (GO:0006888)</span></h1>

<?php
$sql= "SELECT * FROM pti_modules LIMIT 7";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

	while($rows = mysqli_fetch_array($result)) {
?>
	<li><?php     echo $rows ["M_119"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 212 <span> (GO:0006974)</span></h1>

<?php
$sql= "SELECT * FROM pti_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_212"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 265 <span> (GO:0050896)</span></h1>

<?php
$sql= "SELECT * FROM pti_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_265"];?></li>

<?php
}
?>



</div>
<div data-role="collapsible">
<h1>Module 289 <span> (GO:0006914)</span></h1>

<?php
$sql= "SELECT * FROM pti_modules LIMIT 3";
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

 <!-- #################################################### Signal Response ####################################################  -->
    <div data-role="main" class="ui-content">
    <div data-role="collapsible">
      <h1>Signal Response</h1>

<div data-role="collapsible">
<h1>Module 27  <span> (GO:0016310)</span></h1>

<?php
$sql= "SELECT * FROM pti_modules LIMIT 25";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_27"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 30 <span> (GO:0006470)</span></h1>

<?php
$sql= "SELECT * FROM pti_modules LIMIT 23";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_30"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 35 <span> (GO:0016310)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 20";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_35"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 58 <span> (GO:0006468)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 14";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_58"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 71 <span> (GO:0007264)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 11";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_71"];?></li>

<?php
}
?>

</div>


<div data-role="collapsible">
<h1>Module 86  <span> (GO:0046488)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 10";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_86"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 140  <span> (GO:0043087)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 6";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_140"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module  205 <span> (GO:0032312)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_205"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 223 <span> (GO:0006551)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_223"];?></li>

<?php
}
?>

</div>
    </div>
  </div>

 <!-- ############################### Transcriptional Regulation ######################################## -->

<div data-role="main" class="ui-content">
    <div data-role="collapsible">
      <h1>Transcriptional Regulation</h1>
<div data-role="collapsible">
<h1>Module 2  <span> (GO:0006350)</span></h1>

<?php
$sql= "SELECT * FROM pti_modules";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_2"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 13  <span> (GO:0045449)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 48";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_13"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 17 <span> (GO:0045449)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 38";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_17"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 36 <span> (GO:0010468)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 19";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_36"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 68 <span> (GO:0006396)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 12";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_68"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 79 <span> (GO:0006350)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 11";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_79"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 196  <span> (GO:0006396)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_196"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 216  <span> (GO:0006364)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_216"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 239 <span> (GO:0010468 )</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_239"];?></li>

<?php
}
?>

</div>


<div data-role="collapsible">
<h1>Module 299 <span> (GO:0006355 )</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_299"];?></li>

<?php
}
?>

</div>


<div data-role="collapsible">
<h1>Module 301  <span> (GO:0006350)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 3";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_301"];?></li>

<?php
}
?>

</div>

    </div>
  </div>

 <!-- ########################################## Growth or Development ############################################  -->
    <div data-role="main" class="ui-content">
    <div data-role="collapsible">
      <h1>Growth or Development</h1>

<div data-role="collapsible">
<h1>Module 48 <span> (GO:0008150 )</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 17 ";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_48"];?></li>

<?php
}
?>
</div>

<div data-role="collapsible">
<h1>Module 59 <span> (GO:0019320)</h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 14";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_59"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 66 <span> (GO:0031326)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 12";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_66"];?></li>

<?php
}
?>

</div>


<div data-role="collapsible">
<h1>Module 85 <span> (GO:0009058 )</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 10";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_85"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 88 <span> (GO:0006188)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 9";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_88"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 92 <span> (GO:0032502)</span></h1>

<?php
$sql= "SELECT * FROM pti_modules LIMIT 9";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_92"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 95 <span> (GO:0006793)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 8";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_95"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 143 <span> (GO:0019219)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 6";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_143"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 201 <span> (GO:0009058 )</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_201"];?></li>

<?php
}
?>

</div>

<div data-role="collapsible">
<h1>Module 202 <span> (GO:0032259 )</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_202"];?></li>

<?php
}
?>

</div>


<div data-role="collapsible">
<h1>Module 237 <span> (GO:0031326)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 4";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_237"];?></li>

<?php
}
?>

</div>


<div data-role="collapsible">
<h1>Module 308 <span> (GO:0031326)</span></h1>
<?php
$sql= "SELECT * FROM pti_modules LIMIT 3";
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
$sql= "SELECT * FROM pti_modules LIMIT 17";
$result = mysqli_query($conn,$sql) or die(mysqli_error () );

        while($rows = mysqli_fetch_array($result)) {
?>
        <li><?php     echo $rows ["M_46"];?></li>

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
<!--magna modules Modal -->



<!------ PTI end---------->


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
