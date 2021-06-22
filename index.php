<?php get_header(); ?>

<div class="row">
	<div class="col-12">
		<div class="jumbotron">
			<center>
				<h1>Time Lord Theme</h1>
			</center>
		</div>	
	</div>		
</div>

<div class="row">
	<div class="col-12" id="intro">
			<h3>Introdução</h3>
			<p>"Wibbly wobbly timey wimey stuff". É algo difícil de explicar. O tempo é algo relativo, não é algo certo como as pessoas acham. É distorcido e muito confuso de tentar entender. Como dito: Wibbly wobbly timey wimey stuff. </p>
	</div>		
</div>

<div class="row">
	<div class="col-12">
		<?php masterslider(1); ?>
	</div>		
</div>


<div class="row">
	<?php 
		if (have_posts()){
			while (have_posts()){ 
				the_post(); 
	?>

	<div class="col-4">
		<h3><?php the_title();?></h3> 
		<div class="foto">
			<?php the_post_thumbnail();?>
		</div>
		<p><?php the_excerpt();?></p>
		<button type="button" class="btn btn-dark" href="<?php the_permalink()?>">Ler mais</button>
	</div>

	<?php
			}
		}
	?>
</div>
	

<?php get_footer(); ?>



	