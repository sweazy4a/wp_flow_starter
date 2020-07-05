<div class="slider" id="main-slider"><!-- outermost container element -->

    <div class="slider-wrapper"><!-- innermost wrapper element -->
   
    <?php if( have_rows('slider_top') ): ?>
    <?php while( have_rows('slider_top') ): the_row();    ?>
      
     
		<div class="slide" data-image="<?php echo get_sub_field('img_slide');?>"></div><!-- slides -->
 
   <?php 
    endwhile;

// No value.
else :
    // Do something...
endif; ?>

    </div>

	<div class="slider-nav"><!-- "Previous" and "Next" actions -->
		<button class="slider-previous"><img src="<?php echo get_template_directory_uri();?>/img/arrow-left.png"/></button>
		<button class="slider-next"><img src="<?php echo get_template_directory_uri();?>/img/arrow-right.png"/></button>
    </div>
    <a href="ibox" class="scroll-down" address="true"><img src="<?php echo get_template_directory_uri();?>/img/arrow-down.png"/></a>    







    
</div>