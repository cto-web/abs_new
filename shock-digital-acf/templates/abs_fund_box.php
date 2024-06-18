<?php 


$image	     = get_sub_field('image');
$button 	 = get_sub_field('button');

$aos_class	 =	 get_sub_field('content_animation_class');
$bccolor	 =	 get_sub_field('background_color');
$paddingt	 =	 get_sub_field('padding_top');
$paddingb	 =	 get_sub_field('padding_bottom');
$margint	 =	 get_sub_field('margin_top');
$marginb	 =	 get_sub_field('margin_bottom');

?>

<div class="funds-box" data-aos="<?=$aos_class?>" style="margin-top:<?=$margint?>px;margin-bottom:<?=$marginb?>px;padding-top:<?=$paddingt?>px;padding-bottom:<?=$paddingb?>px; background-color:<?= $bccolor; ?>;">
	<div class="container">
		<div class="funds-content-inner">
			<img src="<?=$image?>">
			<div class="abs-chart-container-panel">
				<div id="abs-chart-container">
				
				</div>
				<div class="chart-title">Rendement ABS Fonds</div>
			</div>
			<div class="button-wrap">
				<a class="button dark" href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target']); ?>">
					<?php echo esc_html($button['title']); ?>
				</a>
			</div>
		</div>
	</div>
</div>