<?php 

get_header();

?>


<div class="container">

<div class="row">
    <div class="col-sm-9 col-xs-12">
        <div id="opmaakblogpost">
        <div id="inhoud_blogpost">
    
    <?php
if(have_posts()) 
{
    while(have_posts())
    {
        the_post(); 
        //Print the title and the content of the current post
        ?>

        <a id="postsFront2" href="<?php the_permalink() ?>" rel="Link naar item" title="Permalink naar <?php the_title_attribute(); ?>">
                            <h2 class="titel_post"><?php the_title(); ?></h2>
                            </a>
                            
       
        <?php
        the_content();
        the_time();
        echo ", &nbsp;";
        the_date();
        echo '</br>';
        echo '</br>';
        
    }
}
else
{
    echo 'No content available';
}
?>

</div>
</div>
    </div>
    <div class="col-sm-3 col-xs-12">
   <img id="foto3" src="http://imgur.com/PyByEfc.jpg" style="width:300px;height:380px;" />
    </div>

</div>



</div>



<?php get_footer();?>

