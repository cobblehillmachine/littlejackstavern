<?php
/**
 * @package WordPress
 * @subpackage Eclectic
 */
?>

	
	<footer class="">
		<div class="inner-footer">
			<div class="table">
				<div class="table-cell info"><?php the_field('footer_info'); ?></div>
				<div class="table-cell"><a href="tel:<?php the_field('area_code'); ?>-<?php the_field('phone_number') ?>"><span><?php the_field('area_code'); ?></span> <?php the_field('phone_number') ?></a></div>
			</div>
		</div>
	</footer>

	</div> <!-- ENDS BODY WRAPPER -->
	<?php wp_footer(); ?>

</body>
</html>