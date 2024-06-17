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

<div class="cost-box" data-aos="<?=$aos_class?>" style="margin-top:<?=$margint?>px;margin-bottom:<?=$marginb?>px;padding-top:<?=$paddingt?>px;padding-bottom:<?=$paddingb?>px; background-color:<?= $bccolor; ?>;">
	<div class="container-sm">
        <div class="cost-headline">
            <h2 class="heading-style"><?= $title; ?></h2>
            <p><?= $content; ?></p>
        </div>
        <div class="table-parent">
            <?php 
                if( have_rows('table') ): 
                while( have_rows('table') ) : the_row(); 
                $s_title = get_sub_field('title'); 
                $s_content = get_sub_field('content');
            ?>
                <div class="table-inner">
                    <div class="title"><?= $s_title; ?></div>
                    <div class="content"><?= $s_content; ?></div>
                </div>
            <?php 
                endwhile; 
                endif; 
            ?>
        </div>
        <div class="table-bottom-content"> <?= $table_content; ?></div>
	</div>
</div>