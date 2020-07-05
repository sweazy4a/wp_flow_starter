<div class="container-fluid" id="footer">

<ul class="col-md-4 foot-left">

  
<?php 
if(is_active_sidebar('footer_area_one')){
dynamic_sidebar( 'footer_area_one' ); } ?>

</ul>

<div class="col-md-8 foot-right">
<ul class="menu11">
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?> 

</ul>
     <ul class="menu2">
   
     <?php 
     if(is_active_sidebar('footer_area_two')){
     dynamic_sidebar( 'footer_area_two' ); 
    }?>
     </ul>

   <ul class="adres">
   <?php if(is_active_sidebar('footer_area_three')){
   dynamic_sidebar( 'footer_area_three' ); } ?>
   </ul>

   <ul class="time">
   <?php 
   if(is_active_sidebar('footer_area_four')){
   dynamic_sidebar( 'footer_area_four' ); }?>
   </ul>

   </div>
   
</div>