<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
	<div class="container">
		<div class="row text-center">
			<div class="col-12 pt-5 mt-5">
				<h1 class="has-text-align-center underline">
					<span style="text-decoration: underline;"><?php the_title(); ?></span>
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12 mt-5">
				<?php
				while ( have_posts() ) : the_post();
					the_content();
				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>
<?php
get_footer();
