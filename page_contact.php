<?php

/**
 * Template name: Contact
 *
 * @package My Theme
 * @since 1.0
 */
?>

<?php get_header(); ?>

<div id="container">
    <div id="">

        <?php the_post(); ?>

        <section class="hero padding-y-xxl">
            <div class="container max-width-adaptive-sm">
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
                        <?php the_content(); ?>
                        <?php wp_link_pages('before=<div class="page-link">' . __('Pages:', 'mycustomtheme') . '&after=</div>') ?>
                    </div><!-- .entry-content -->
                </div><!-- #post-<?php the_ID(); ?> -->
            </div>
        </section>

        <section class="hero padding-y-xxl">
            <div class="container max-width-adaptive-sm">
                <?php echo do_shortcode('[contact-form-7 id="52" title="Formulário de contato 1"]'); ?>
            </div>
        </section>

    </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>