<?php 

$title 	     = get_sub_field('title');
$content	 = get_sub_field('content');
$button 	 = get_sub_field('button');

$aos_class	 =	 get_sub_field('content_animation_class');
$bccolor	 =	 get_sub_field('background_color');
$paddingt	 =	 get_sub_field('padding_top');
$paddingb	 =	 get_sub_field('padding_bottom');
$margint	 =	 get_sub_field('margin_top');
$marginb	 =	 get_sub_field('margin_bottom');

?>

<div class="hero-box" data-aos="<?=$aos_class?>" style="margin-top:<?=$margint?>px;margin-bottom:<?=$marginb?>px;padding-top:<?=$paddingt?>px;padding-bottom:<?=$paddingb?>px; background-color:<?= $bccolor; ?>;">
	<div class="hero-parents">
		<div class="container">
			<div class="hero-content-inner">
				<h1 class="title"><?=$title?></h1>
				<div class="content"><?=$content?></div>
				<ul class="list">
					<?php
						if( have_rows('list') ):
						while( have_rows('list') ) : the_row();
						$list_item = get_sub_field('add_list_item');
					?>
						<li><?= $list_item; ?></li>
					<?php
						endwhile;
						endif;
					?>
				</ul>
				<div class="button-wrap">
					<a class="button" href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target']); ?>">
						<?php echo esc_html($button['title']); ?>
					</a>
				</div>

			</div>
		</div>
	</div>
	<div class="ellipse-shape"><img src="https://dev.logo4life.nl/abs/wp-content/uploads/2024/06/Ellipse-3.svg" alt="Ellipse"></div>
</div>