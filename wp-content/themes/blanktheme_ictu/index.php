<?php
get_header();
?>
    <div class="wrapper-content">
        <div class="container">
            <div id="main-content" class="main-content">
                <main id="content" role="main">
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'template-parts/entry' );
                        comments_template();
                    }
                }
                get_template_part( 'template-parts/nav', 'below' );
                ?>
                </main>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php
get_footer();