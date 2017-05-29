<?php 

get_header();

?>



<div class="container">

<div class="row">

    <div class="col-sm-9 col-xs-12">

        <div id="opmaakblogpost">
        <div id="inhoud_blogpost">


        
    <?php get_template_part('partials/content', 'bieren'); ?>
  
    </div>
</div>
</div>
    <div class="col-sm-3 col-xs-12">
   <img id="foto10" src=<?php the_post_thumbnail(array( 200, 300 )); ?> 
    </div>
    
</div>
</div>



<?php get_footer();?>

