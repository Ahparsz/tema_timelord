<?php get_header(); ?>

<div class="row">
	<?php 
		if (have_posts()){
			while (have_posts()){ 
				the_post(); 
	?>

	<div class="col-4">
		<div class="jumbotron">
			<h1 class="display-4"><?php the_title();?></h1> 
		</div>

		<p><?php the_content();?></p>
	</div>

	<?php
			}
		}
	?>
</div>
	

<?php get_footer(); ?>



	