<!DOCTYPE html>
<html>
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=XX-XXXXXXXX-X1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'XX-XXXXXXXX-X');
</script>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />
<link rel="stylesheet" href="https://use.typekit.net/mfi1bvg.css">
<?php wp_head(); ?>
</head>
	<header class="site-header">
		<div class="container">
			<div class="d-flex justify-between flex-wrap">
				<div class="head-logo left">
					<a href="<?= get_site_url();?>">
						<span class="logo"><?= get_field('logo_text','option');?></span>
						<span class="slogan"><?= get_field('logo_description','option');?></span>
					</a>
				</div>
				<div class="right">
					<nav class="head-nav">
						<?php wp_nav_menu( array('theme_location'=>'primary','menu_id'=>'primary-menu')); ?>
					</nav>
				</div>
			</div>
		</div>
	</header>
<body <?php body_class(); ?>>
