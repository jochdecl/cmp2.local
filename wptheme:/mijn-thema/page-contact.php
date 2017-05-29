<?php 

get_header();

?>


<div class="container" >

<div class="row">
    <div class="col-sm-9 col-xs-12">
        <div class="row">
           
            <div class="col-md-12">  
            
                <div id="valign_middle"><?php get_template_part('partials/content2'); ?>
                 
            </div>
            <div id="contact">
                <div class="col-md-6">
            
                    <?php
                        echo do_shortcode('[contact-form-7 id="44" title="Contact form 1"]');
        
                    ?>
                </div>
            </div>

                <div class="col-md-6">
            
        
                    <?php
                        echo do_shortcode('[wpgmza id="1"]'); 
        
                    ?>
                 </div>
        
                   
              
        </div>
    </div>
        
        
    

    </div>
    </div>


</div>






</div>



<?php get_footer();?>