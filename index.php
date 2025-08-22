<?php
/**
 * Template Name: Homepage
 */
get_header();
$dir_iamges = get_template_directory_uri() . '/inc/assets/images/';
?>
<section>
    <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    ?>
</section>
<script>
jQuery(document).ready(function($) {})
</script>
<?php
get_footer();