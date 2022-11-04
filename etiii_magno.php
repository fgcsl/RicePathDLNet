
<?php include ("header.php"); ?>


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

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="interactions">
                    <p data-toggle="modal" data-target="#magna_interaction_Modal" class="counter-count">15886</p>
                    <p class="interactions-p">Gene-Interactions</p>
                </div>
            </div>

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

<?php include ("Models_html_table/magnaporthe/magna_gene_model.php"); ?>
<?php include ("Models_html_table/magnaporthe/magna_interaction_model.php"); ?>
<?php include ("Models_html_table/magnaporthe/magna_module_model.php"); ?>


<!------ magno end---------->

<div class="text-center">
<h2>Magnoporthe Hub Genes</h2>
                      


Protein Sequence 
 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalLong">
 View
</button>

<!-- Modal -->
<div class="modal fade" id="ModalLong" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Download</button>
      </div>
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


<?php include 'footer.php'; ?>
