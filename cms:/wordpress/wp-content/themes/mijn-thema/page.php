<?php 

get_header();

?>


<div class="container">

<div class="row">
    <div class="col-sm-9 col-xs-12">
    <?php get_template_part('partials/content'); ?>


<!--<div class="row">
    <div class=" col-md-4">Blog item 1</div>
    <div class=" col-md-4">Blog item 1</div>
    <div class=" col-md-4">Blog item 1</div>

</div>-->

    </div>
    
    <div class="col-sm-3 col-xs-12">
    <?php get_sidebar();?>
    </div>

</div>






</div>



<?php get_footer();?>

