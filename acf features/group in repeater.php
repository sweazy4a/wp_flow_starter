<?php

// Check rows exists.
if( have_rows('repeater_field_name') ):

    // Loop through rows.
    while( have_rows('repeater_field_name') ) : the_row();?>

    
       <div class="col">
           
       
       <?php get_sub_field('sub_field'); ?>
    
    </div>
  
<div class="row">

<!-- Group loop -->
<?php if( have_rows('group_name') ): ?>
  <?php while( have_rows('group_name') ): the_row(); ?>

  <div class="col">
   <!-- Sub field name -->
  <h2><?php echo get_sub_field('name')?></h2>

</div>

  <?php endwhile; ?>
<?php endif; ?>
</div>

   <?php 

    endwhile;

// No value.
else :
    // Do something...
endif;

?>