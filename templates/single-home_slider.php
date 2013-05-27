<?php
/**
 * Sample template for displaying single home_slider posts.
 * Save this file as as single-home_slider.php in your current theme.
 *
 * This sample code was based off of the Starkers Baseline theme: http://starkerstheme.com/
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	

	<h1><?php the_title(); ?></h1>

		<h2>Custom Fields</h2>	
		
		<strong>Section Title</strong> <?php print_custom_field('sectiontitle'); ?><br />
		<strong>Section Price</strong> <?php print_custom_field('sectionprice'); ?><br />
		<strong>Main field description:</strong> <?php print_custom_field('maincontentdescription:do_shortcode'); ?><br />
		<strong>Main Field BG:</strong> <img src="<?php print_custom_field('mainfieldbg:to_image_src'); ?>" /><br />
		<strong>Left Action Button:</strong> <?php print_custom_field('leftactionbutton:to_link'); ?><br />
		<strong>Right Action Button</strong> <?php print_custom_field('rightactionbtn'); ?><br />




<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>