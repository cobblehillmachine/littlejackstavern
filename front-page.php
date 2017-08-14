<?php get_header(); ?>
<div class="hero" style="background-image:url(<?php the_field('hero_background_image') ?>)">
	<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" style="z-index: 5" />
	<div class="flexslider" style="border: none;" >
	
	  <ul class="slides">
	  <?php while( have_rows('slider') ): the_row();
	    $image = get_sub_field('image'); ?>
	    <li style="background-image: url('<?php  echo $image ?>');height: 100vh;background-position: center center;background-repeat: no-repeat;background-size: cover;">
<!-- 	    	<img src="<?php echo $image; ?>" /> -->
	    </li>
	  <?php endwhile; ?>
	  </ul>
	</div>

</div>
<hr>
<div class="yellow">
	<div class="about">
		<h2><?php the_field('about_headline') ?></h2>
		<p><?php the_field('about_content') ?></p>
		<h3><?php the_field('about_subcontent') ?></h3>
	</div>
	<div class="content">
		<div class="peeking-1 peeking"><img src="<?php the_field('peeking_image_1'); ?>"></div>
		<div class="left bar"></div>
		<div class="right bar"></div>
		<div class="lunch table">
			
			<div class="hours"><?php the_field('lunch_hours') ?></div>
			<div class="menu ">
				<br>
				<!-- <a class="button view-menu" target=_blank href="<?php // the_field('total_menu') ?>">View Menu</a> -->
				<a class="button view-menu" target=_blank href="<?php the_field('lunch_menu') ?>">Lunch Menu</a>
				<br>
				<br>
				<a class="button view-menu" target=_blank href="<?php the_field('dinner_menu') ?>">Dinner Menu</a>
				<br>
				<br>
				<a href="https://resy.com/cities/chs/little-jacks-tavern" id="resyButton-t3ax7i18">Book your Little Jack's Tavern reservation on Resy</a>
				<script src="https://widgets.resy.com/embed.js"></script>
				<script>
				    resyWidget.addButton(document.getElementById('resyButton-t3ax7i18'), {"venueId":478,"apiKey":"tqWr10hsGP9uJ6CHXCpbLHHCoJaBftbP","replace":true});
				</script>
			</div>
		</div>
		<div class="peeking-2 peeking"><img src="<?php the_field('peeking_image_2'); ?>"></div>
	</div>
	<section class="awardSection">
		<div class="award">
			<section><img src="<?php the_field('award1') ?>" /></section>
			<footer><?php the_field('award1_text') ?></footer>
		</div>
		<div class="award">
			<section><img src="<?php the_field('award2') ?>" /></section>
			<footer><?php the_field('award2_text') ?></footer>
		</div>
		<div class="award">
			<section><img src="<?php the_field('award3') ?>" /></section>
			<footer><?php the_field('award3_text') ?></footer>
		</div>
	</section>
</div>
<hr>

<a class="map" style="background-image:url(<?php the_field('map_background') ?>); display: block"href="<?php the_field('google_maps_link'); ?>" target=_blank>
	<img class="desktop" src="<?php the_field('transparent_map') ?>">
	<img class="mobile" src="<?php the_field('transparent_mobile_map') ?>">
	<div class="parking-box">
		<?php if( have_rows('parking_info') ):
			while ( have_rows('parking_info') ) : the_row(); ?>
			<div class="row">
				<p><?php the_sub_field('info'); ?></p>
				<p><span><?php the_sub_field('street_number'); ?></span> <?php the_sub_field('street_name'); ?></p>
			</div>
			<?php endwhile;
		endif ?>
	</div>
</a>


<?php get_footer(); ?>