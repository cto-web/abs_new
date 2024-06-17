<?php 

$image 	     = get_sub_field('image');
$title 	     = get_sub_field('title');
$content	 = get_sub_field('content');
$button 	 = get_sub_field('button');
$if_img_pos  = get_sub_field('move_the_image_to_the_right');

$aos_class	 =	 get_sub_field('content_animation_class');
$bccolor	 =	 get_sub_field('background_color');
$paddingt	 =	 get_sub_field('padding_top');
$paddingb	 =	 get_sub_field('padding_bottom');
$margint	 =	 get_sub_field('margin_top');
$marginb	 =	 get_sub_field('margin_bottom');

?>

<div class="image-box" data-aos="<?=$aos_class?>" style="margin-top:<?=$margint?>px;margin-bottom:<?=$marginb?>px;padding-top:<?=$paddingt?>px;padding-bottom:<?=$paddingb?>px; background-color:<?= $bccolor; ?>;">
	<div class="container">
		<div class="d-flex align-items-center justify-between">
			<div class="image <?php echo $if_img_pos ? 'order-2' : ''; ?>">
                <img src="<?=$image?>">
            </div>
            <div class="content <?php echo $if_img_pos ? 'order-1' : ''; ?>">
                <?php if($title): ?>
                <h2 class="heading-style"><?=$title?></h2>
                <?php endif; ?>
                <?php if($content): ?>
                <div class="editor"><?=$content?></div>
                <?php endif; ?>
                <?php if($button): ?>
                <div class="button-wrap">
                    <a class="button dark" href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target']); ?>">
                        <?php echo esc_html($button['title']); ?>
                    </a>
                </div>
                <?php endif; ?>
            </div>
		</div>
	</div>
</div>