<?php 

$left_title	    =	 get_sub_field('left_title');
$left_content	=	 get_sub_field('left_content');
$right_title	=	 get_sub_field('right_title');
$right_content	=	 get_sub_field('right_content');
$image	        =	 get_sub_field('image');
$animated_title	=	 get_sub_field('animated_title');

$aos_class	 =	 get_sub_field('content_animation_class');
$bccolor	 =	 get_sub_field('background_color');
$paddingt	 =	 get_sub_field('padding_top');
$paddingb	 =	 get_sub_field('padding_bottom');
$margint	 =	 get_sub_field('margin_top');
$marginb	 =	 get_sub_field('margin_bottom');

?>

<div class="about-box" data-aos="<?=$aos_class?>" style="margin-top:<?=$margint?>px;margin-bottom:<?=$marginb?>px;padding-top:<?=$paddingt?>px;padding-bottom:<?=$paddingb?>px; background-color:<?= $bccolor; ?>;">
	<div class="container">
        <div class="d-flex">
            <div class="left-content">
                <h4 class="heading-style white"><?= $left_title; ?></h4>
                <?= $left_content; ?>
            </div>
            <div class="right-content">
                <h4 class="heading-style white"><?= $right_title; ?></h4>
                <?= $right_content; ?>
            </div>
        </div>
        <div class="image"><img src="<?= $image; ?>"></div>
        <div class="animted-title"><img src="https://dev.logo4life.nl/abs/wp-content/uploads/2024/06/Logo-Woordmerk-Wit.svg" alt="Logo-Woordmerk-Wit"></div>
    </div>
	<div class="ellipse-shape"><img src="https://dev.logo4life.nl/abs/wp-content/uploads/2024/06/Ellipse-3.svg" alt="Ellipse"></div>
</div>