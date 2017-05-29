<?php 

get_header();

?>

<div class="container">
    <div class="row">
<?php

if(have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="col-md-4">

            <a id="postsFront" href="<?php the_permalink() ?>" rel="Link naar item" title="Permalink naar <?php the_title_attribute(); ?>">
                <h2><?php the_title(); ?></h2>
            </a>

            <div id="the_thumbnail">
                <?php 
                // check if the post or page has a Featured Image assigned to it.
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail(array( 200, 300 ));
                }
                ?>
            </div>
            <br>
            <br>
            <?php the_content(); ?>
            
        </div>
        
        
<?php
    endwhile;
else :
    echo "<p>No posts found</p>";
endif;
?>
                <div class="next_prev_buttons2">
                    <?php echo next_posts_link('<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>');?>

                    <?php echo previous_posts_link('<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>');?>
                    </div>
                   </div>
    
    
</div>

<?php get_footer();?>
