<?php
/*
Template Name: PageTemplate
*/

get_header();

if( have_rows('flexible_content') ):

    while ( have_rows('flexible_content') ) : the_row();
        $layout =   get_row_layout();
        get_template_part('templates/'.$layout);

    endwhile;
	
endif;

get_footer();
?>