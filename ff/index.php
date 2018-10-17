<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php
query_posts('posts_per_page=-1&post_type=home-page-modules');
while(have_posts()):
	the_post();
	$home_page_modules = get_post_meta(get_the_ID(), '_modular_home_page_plugin_module', true);
	if(is_array($home_page_modules) && count($home_page_modules)>0) {
		foreach($home_page_modules as $module) {
			echo do_shortcode($module);
		}
	}
endwhile;
?>

<?php get_footer(); ?>
