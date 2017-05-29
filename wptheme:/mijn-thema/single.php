<?php 

get_header();

?>


<div class="container">
<div class="container1">

<div class="row">
    <div class="col-sm-9 col-xs-12">
    <?php
if(have_posts()) 
{
    while(have_posts())
    {
        the_post();
        //Print the title and the content of the current post
        the_title('<h1>', '</h1>', true); ?>
        
        <?php
         if ( has_post_thumbnail() ) {
                the_post_thumbnail(array( 1100, 3000 ));
                }


         echo "</br>";
          echo "</br>";
        the_content();
        the_time();
        echo "&nbsp;";
        the_date('d-m-Y', '<div class="date">', '</div>');
        echo "</br>";
         echo "</br>";
          echo "</br>";
          echo"<h2>Reacties</h2>";
        comments_template();
        
        
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
</div>



<?php get_footer();?>
