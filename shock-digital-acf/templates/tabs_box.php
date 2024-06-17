<?php 

$aos_class	 =	 get_sub_field('content_animation_class');
$bccolor	 =	 get_sub_field('background_color');
$paddingt	 =	 get_sub_field('padding_top');
$paddingb	 =	 get_sub_field('padding_bottom');
$margint	 =	 get_sub_field('margin_top');
$marginb	 =	 get_sub_field('margin_bottom');

?>

<div class="tabs-box" data-aos="<?=$aos_class?>" style="margin-top:<?=$margint?>px;margin-bottom:<?=$marginb?>px;padding-top:<?=$paddingt?>px;padding-bottom:<?=$paddingb?>px; background-color:<?= $bccolor; ?>;">
	<div class="container-sm">
        <div class="tabs-parent">
            <?php if( have_rows('tabs') ): ?>
                <div class="tabs-container">
                    <div class="tabs">
                        <?php $i = 0; ?>
                        <?php while( have_rows('tabs') ) : the_row(); ?>
                            <?php 
                                $title = get_sub_field('title'); 
                                $image = get_sub_field('icon');
                                $content = get_sub_field('content');
                                $row = get_row_index();
                            ?>
                            <div class="tab <?php echo $i === 0 ? 'active' : ''; ?>" data-tab="tab-<?php echo $row; ?>">
                                <p><?= $title; ?></p>
								<div class="tab-image"><img src="<?= $image; ?>"></div>
                            </div>
                            <?php $i++; ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="tabs-content">
                        <?php $i = 0; ?>
                        <?php while( have_rows('tabs') ) : the_row(); ?>
                            <?php 
                                $content = get_sub_field('content');
                                $row = get_row_index();
                            ?>
                            <div class="tab-content <?php echo $i === 0 ? 'active' : ''; ?>" id="tab-<?php echo $row; ?>">
                                <?= $content; ?>
                            </div>
                            <?php $i++; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
	</div>
</div>