<?php get_header(); ?>

<?php 
	if (have_posts()){
		while (have_posts()){ 
			the_post(); 
?>


<div class="row">
	<div class="col-4">
		<h1 class="display-4"><?php the_title();?></h1> 
	</div>
</div>

<?php if (!is_page('contato')){?>
	<div class="row">
		<div class="col-12">
			<p><?php the_content();?></p>
		</div>
	</div>	
<?php } ?>


<div class="row">
	<div class="col-6" id="back">
		<p><?php the_content();?></p>
	</div>

	<div class="col-6">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55453.81015457942!2d-51.510439884010545!3d-29.69474749458238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951bfb5848c2ce2d%3A0xfca122207fb85ea1!2sLugar%20Nenhum!5e0!3m2!1spt-BR!2sbr!4v1624319763059!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
</div>


<?php
		}
	}
?>


<?php get_footer(); ?>



	