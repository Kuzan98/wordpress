<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Melissa_Portfolio
 */

get_header();
?>

<main id="content" class="site-main">

    <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <h1 class="page-title">
                <?php
                /* translators: %s: search query. */
                printf( esc_html__( 'Search Results for: %s', 'melissa-portfolio' ), '<span>' . get_search_query() . '</span>' );
                ?>
            </h1>
        </header><!-- .page-header -->

        <?php
        /* Start the Loop */
        while ( have_posts() ) :
            the_post();

            /**
             * Run the loop for the search to output the results.
             * If you want to overload this in a child theme then include a file
             * called content-search.php and that will be used instead.
             */
            get_template_part( 'template-parts/content', 'search' );

        endwhile;

        do_action( 'melissa_portfolio_posts_pagination' );

    else :

        get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

</main><!-- #main -->

<?php
if ( melissa_portfolio_is_sidebar_enabled() ) {
	get_sidebar();
}
get_footer();
