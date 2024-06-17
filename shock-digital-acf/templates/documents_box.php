<?php 

$title	        =	 get_sub_field('title');
$content	    =	 get_sub_field('content');
$table_content	=	 get_sub_field('table_bottom_content');

$aos_class	 =	 get_sub_field('content_animation_class');
$bccolor	 =	 get_sub_field('background_color');
$paddingt	 =	 get_sub_field('padding_top');
$paddingb	 =	 get_sub_field('padding_bottom');
$margint	 =	 get_sub_field('margin_top');
$marginb	 =	 get_sub_field('margin_bottom');

?>

<div class="documents-box" data-aos="<?=$aos_class?>" style="margin-top:<?=$margint?>px;margin-bottom:<?=$marginb?>px;padding-top:<?=$paddingt?>px;padding-bottom:<?=$paddingb?>px; background-color:<?= $bccolor; ?>;">
	<div class="container">
        <div class="document-headline">
            <h2 class="heading-style"><?= $title; ?></h2>
            <div class="content"><?= $content; ?></div>
        </div>
        <div class="documents-parent">
            <?php 
                if( have_rows('documents') ): 
                while( have_rows('documents') ) : the_row(); 
                $file = get_sub_field('file');
                $file_url = $file['url'];
                $file_title = $file['title'];
            ?>
                <a class="downlod-btn" href="<?php echo esc_url($file_url); ?>" download="<?php echo esc_attr($file_title); ?>"><?php echo esc_html($file_title); ?></a>
            <?php 
                endwhile; 
                endif; 
            ?>
        </div>
        <div class="table-bottom-content"> <?= $table_content; ?></div>
	</div>
</div>