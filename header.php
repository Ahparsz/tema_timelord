<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<meta  http-equiv="X-UA-Compatible" content="ie=edge">

<head>
	<title>Página Inicial</title>
	<?php wp_head(); ?>
</head>
	<body>
		<div class="container">

			<div class="row" id="inicio">
				<div class="col-8">
					<h1><?php bloginfo('name')?></h1>
					<p><?php bloginfo('description')?></p>
				</div>

				<div class="col-4">
					<a href="<?php site_url()?>">
						<img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" alt="" class="logo">
					</a>
				</div>
			</div>


			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md" role="navigation" id="menu">
  						<div class="container">
   							<button id="botao" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        						<span class="navbar-toggler-icon"></span>
    						</button>

					        <?php
					        wp_nav_menu( array(
					            'theme_location'    => 'header-menu',
					            'depth'             => 2,
					            'container'         => 'div',
					            'container_class'   => 'collapse navbar-collapse',
					            'container_id'      => 'bs-example-navbar-collapse-1',
					            'menu_class'        => 'nav navbar-nav',
					            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					            'walker'            => new WP_Bootstrap_Navwalker(),
					        ) );
					        ?>
    					</div>
					</nav>
				</div>
			</div>


			

