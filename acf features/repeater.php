<?php

// Check rows exists.
if( have_rows('repeater_field_name') ):

    // Loop through rows.
    while( have_rows('repeater_field_name') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('sub_field');
        // Do something...

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;