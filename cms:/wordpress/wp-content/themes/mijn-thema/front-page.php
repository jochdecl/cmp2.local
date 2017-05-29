

<?php 
get_header();

?>
 
<div id="slider">
<?php 
echo do_shortcode("[metaslider id=52]"); 
?>
</div>


<div class="container">




<div class="row">
   
    <div class="col-sm-9 col-xs-12">

    <div id="filmpje">
    <iframe width="800" height="315" src="https://www.youtube.com/embed/G6OPQOz6n_g" frameborder="0" allowfullscreen></iframe>
    </div>
            <br>
            <br>


    <a id="foto1" href="bieren/"><img src="http://imgur.com/z1GBzHr.jpg" style="width:400px;height:200px;" /></a>
    <a id="foto2" href="Wedstrijd/"><img src="http://imgur.com/X8Ox9iO.jpg" style="width:400px;height:200px;" /></a>
   
   
  <br>
  <br>
    <h2 id="titel_blog">Recente Blogberichten </h2>
  
    <hr class="style14">
      
    <?php get_template_part('partials/content'); ?>

    

<div class="row">
    
<?php
    $posts = get_posts ("cat=0&showposts=6");
    
    if ($posts) {
        foreach ($posts as $post):
            setup_postdata($post); ?>
            
                <div class="col-md-4">
                    
                <a id="postsFront" href="<?php the_permalink() ?>" rel="Link naar item" title="Permalink naar <?php the_title_attribute(); ?>">
                <h2><?php the_title(); ?></h2>
                </a>
<div class="afbeelding_post">
                <?php
                    
                    // check if the post or page has a Featured Image assigned to it.
                

              
                the_post_thumbnail(array( 200, 300 ));
                
                    //the_post();
                    
                ?>
              </div>
        <div class="col-md-9">
            <?php
             the_content();
             the_time();
        echo "&nbsp;";
        the_date('d-m-Y', '<div class="date">', '</div>');
          
            ?>
        </div>
            </div>


<?php 

        endforeach;
    }
?>

<div id="meerposts">
<a href="blog/">Meer posts</a>
</div>

</div>


    </div>
    
    <div id="sidebar" class="col-sm-3 col-xs-12">
    <?php get_sidebar();?>
    <br>
    <br>
    <br>
    <a id="foto4" href="about-us/"><img src="http://imgur.com/fzI13o3.jpg" style="width:300px;height:300px;" /></a>
    </div>

    

</div>
</div>


<?php get_footer();?>

