<?php 
if(have_posts()) 
{
    while(have_posts())
    {
        //Initialize the post (type = portfolio)
        the_post();
        //Get custom fields
       $hyperlink = get_post_meta(get_the_ID(), 'hyperlink', true);
       $volume = get_post_meta(get_the_ID(), 'volume', true);
        //$hyperlink = get_post_meta(get_the_ID(), 'veld2', true);
        //$hyperlink = get_post_meta(get_the_ID(), 'veld3', true);


        //Print the content of the portfolio
        
        
       
?>                               
<h1><?php the_title(); ?></h1>
<section class="bieren">
<?php the_content(); 
    echo get_post_meta(get_the_ID(), 'hyperlink', true);

?>

<?php if($hyperlink): ?>
<a href="<?php echo $hyperlink; ?>" class="btn btn-primary" target="_blank"> Bekijk de website </a>
<?php endif; ?>

<?php if($volume): ?>
<?php echo intval($volume)*10; ?> ml.
<?php endif; ?>
</section>
<?php
    }
}
else
{
    echo 'No content available';
}

