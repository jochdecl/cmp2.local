<?php 

get_header();

?>


<div class="container">

<div class="row">
  
</div>
<div>
<div class="col-md-7">
    <div id=contest2>
                  
                       <img id="imgcontest" src="http://i.imgur.com/mmDWax5.png"></img>
        
                
                    </div>

</div>

</div>
<div class="col-md-5">
    <div id=contest>
                    <?php
                       
                        echo do_shortcode('[contest_code_checker]');
        
                    ?>
                    </div>

</div>
<div class="col-md-12">
    <div id=contest3>
                  
                       <?php 
                       get_template_part('partials/content2'); 
                       ?>
        
                
                    </div>

</div>
</div>




    </div>
    
    <div class="col-sm-3 col-xs-12">
    <?php //get_sidebar();?>
    </div>

</div>







</div>

<?php get_footer();?>