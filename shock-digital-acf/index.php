<?php
/*
Template Name: Blogoverzicht
*/
?>

<?php get_header(); ?>


<div class="pagecontainer max max1250">


<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<!-- Datum van publicatie -->
<p class="plaatsingsdatum">Geplaatst: <?php the_date(); ?></p>

<!-- Titel met link -->
<a href="<?php echo get_permalink(); ?>"><h1><?php the_title(); ?></h1></a>

<!-- De body tekst -->
<?php the_content('(Lees meer..)'); ?><Br />

<!-- Begin tags lijst -->
<?php
$tags_list = get_the_tag_list( '', ', ' );
if ( $tags_list ):
?>
<span class="tag-links">
 <?php printf( __( '<span class="%1$s">Tags:</span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
</span>
<?php endif; ?>
<!-- Einde tags lijst -->


<?php endwhile; endif; ?>


</div>

<?php get_footer(); ?>