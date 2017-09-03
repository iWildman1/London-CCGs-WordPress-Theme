<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package London_Clinical_Commissioning_Groups
 */

get_header(); ?>

    <?php if(isset($_GET['post_type'])) {

        if ($_GET['post_type'] == "resources") {
            get_template_part('template-parts/content', 'resources-search');
        } elseif ($_GET['post_type'] == "post") {
            get_template_part('template-parts/content', 'news-search');
        }
    } else {
        get_template_part('template-parts/content', 'search');
}
    ?>

<?php
get_footer();
