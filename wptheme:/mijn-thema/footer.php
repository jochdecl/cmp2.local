<footer>
<!--<div class="left">
<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>

<div class="right">
<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2' ) ); ?>-->


<div id="slider2">
<?php 
echo do_shortcode("[metaslider id=188]"); 
?>
</div>

<h1 id="text_footer">Info en Contact</h2>


 <hr>
        <div class="text-center center-block">
            <br />
                <a href="https://www.facebook.com/beerspot.beer/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/BeerSpots"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/115665577283741894596"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:info@beerspot.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
    <hr>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>

    <div id="sidebar_2_down"
    <?php get_sidebar(2);?>
    <a href="disclaimer/">Disclaimer</a>  
   -
     <a href="privacy-policy/">Privacy Policy</a> 
    </div>



</footer>










</body>
</html>