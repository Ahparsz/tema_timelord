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
			<div class="row">
				<div class="col-4">
					<a href="<?php site_url()?>">
						<img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" alt="" class="logo">
					</a>
				</div>

				<div class="col-8">
					<h1><?php bloginfo('name')?></h1>
					<p><?php bloginfo('description')?></p>
				</div>
			</div>
			

