

<div class="row">

  <!-- Group loop -->
<?php if( have_rows('group_name') ): ?>
    <?php while( have_rows('group_name') ): the_row(); ?>

    <div class="col">
     <!-- Sub field name -->
    <h2><?php echo get_sub_field('name')?></h2>

</div>
    <div class="col2">
    <!-- Sub field name -->
    <?php echo get_sub_field('name')?>
  
    </div>
    <?php endwhile; ?>
<?php endif; ?>
</div>