<?php 

get_header();

?>
<small>archive-portfolio.php</small>

<div class="container">

<div class="row">

<?php
if(have_posts()) 
{
    while(have_posts())
    {
        the_post();
       
?>

<div class="col-md-4">
                <a href="<?php the_permalink() ?>" rel="Link naar item" title="Permalink naar <?php the_title_attribute(); ?>">
                <h2><?php the_title(); ?></h2>
                

                <?php

                the_post_thumbnail('medium');
                the_excerpt();
                ?>
                </a>

                </div>
                <?php

                 }
}
else
{
    echo 'No content available';
}

?>

<!-- <div class="col-sm-9 col-xs-12">
<?php get_template_part('partials/content'); ?>


<div class="row">
    <div class=" col-md-4">Blog item 1</div>
    <div class=" col-md-4">Blog item 1</div>
    <div class=" col-md-4">Blog item 1</div>

</div>

    </div>
    
    <div class="col-sm-3 hidden-xs-12">
    <?php get_sidebar();?>
    </div>

</div>






</div>-->



<?php get_footer();?>
