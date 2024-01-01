<?php get_header() ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>
    <?php endwhile; else: ?>
        <div class="page404">
            <img 
                class="page404-img"
                src="<?php echo get_template_directory_uri() ?>/assets/img/page-not-found.svg" 
                alt="Page not found"
            >
            <a 
                class="h1 d-block text-center page404-link"
                href="<?php echo home_url( '/' ) ?>"
            >
                Back to home
            </a>
        </div>
    <?php endif; ?>

<?php get_footer() ?>