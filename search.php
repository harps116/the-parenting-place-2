<?php
/**
 * The template for displaying search results pages.
 *
 * @package ultrabootstrap
 */

get_header(); ?>
<?php
    $handler = new IntersectionPluginHandler\ACF();
    $handler->get_section('banner', 'base');
?>

<div class="container">
    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <h4><?php printf( esc_html__( 'Search Results for: %s', 'ultrabootstrap' ), '<span>' . get_search_query() . '</span>' ); ?></h4>

            <?php while ( have_posts() ) : the_post(); ?>

                <?php
                    $path = '/partials/posts/post';
                    get_template_part($path);
                ?>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php 
                $path = '/partials/posts/none';
                get_template_part( $path); 
                
            ?>

        <?php endif; ?>

        </main><!-- #main -->
    </section><!-- #primary -->
</div></div>
<?php get_footer(); ?>