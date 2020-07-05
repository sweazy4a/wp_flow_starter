
<div class="container">

    <!-- Group loop -->

    <?php if( have_rows('group_name') ): ?>
    <?php while( have_rows('group_name') ): the_row();
    ?>

    
<div class="row">
    <!-- Display group field -->
    <span><?php echo the_sub_field('sub_field_group')?></span>    
 
<?php echo the_sub_field('sub_field_group')?>
    
    <div class="col"></div>
</div>

    <div class="col01">

       <ul class="col03">

    <!-- Repeater loop -->

        <?php if( have_rows('repeater_loop') ): ?>
        <?php while( have_rows('repeater_loop') ): the_row(); ?>
          
            <li class="swiper-slide">

            <div class="slide-txt">
            
  <!-- Repeater sub fields -->
            <p><?php echo the_sub_field('sub_field_repeater')?> </p>
            <div class="slide-meta">
               <?php echo the_sub_field('sub_field_repeater')?>
               <?php echo the_sub_field('sub_field_repeater')?>
                </span>
            </div>
    
  
     
        </div>
    

    </li>


<?php endwhile;

else :


endif; ?>


<!-- End repeater loop -->


        </ul>
        <!-- Add Pagination -->
  
    </div>

<!-- End group loop -->
    <?php endwhile; ?>
	 <?php endif; ?>
</div>


