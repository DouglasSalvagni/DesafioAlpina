<?php

/**
 * Template name:Pricing
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
                <div class="p-table">
                    <div class="grid gap-sm">
                        <div class="p-table__item col-4@md">
                            <div class="margin-bottom-xxs">
                                <h4 class="p-table__title">Free</h4>
                            </div>

                            <div class="p-table__price margin-bottom-sm"><span>$0</span> <i>/ month</i></div>

                            <ul class="p-table__features margin-bottom-md">
                                <li>1x user</li>
                                <li>Free 15/days trial</li>
                                <li>Access to all features</li>
                                <li>1 project</li>
                            </ul>

                            <div class="margin-top-auto"><a href="#0" class="btn btn--primary btn--md width-100%">Sign up</a></div>
                        </div>

                        <div class="p-table__item p-table__item--popular col-4@md">
                            <div class="flex justify-between items-center margin-bottom-xxs">
                                <h4 class="p-table__title">Pro</h4>
                                <span class="p-table__badge">Popular</span>
                            </div>

                            <div class="p-table__price margin-bottom-sm"><span>$15</span> <i>/ month</i></div>

                            <ul class="p-table__features margin-bottom-md">
                                <li>1x user</li>
                                <li>Access to all features</li>
                                <li>10 projects</li>
                                <li>E-commerce integration</li>
                                <li>Email support</li>
                            </ul>

                            <div class="margin-top-auto"><a href="#0" class="btn btn--primary btn--md width-100%">Sign up</a></div>
                        </div>

                        <div class="p-table__item col-4@md">
                            <div class="margin-bottom-xxs">
                                <h4 class="p-table__title">Enterprise</h4>
                            </div>

                            <div class="p-table__price margin-bottom-sm"><span>$99</span> <i>/ month</i></div>

                            <ul class="p-table__features margin-bottom-md">
                                <li>10x users</li>
                                <li>Access to all features</li>
                                <li>Unlimited projects</li>
                                <li>E-commerce integration</li>
                                <li>24/7 support</li>
                                <li>Full security</li>
                            </ul>

                            <div class="margin-top-auto"><a href="#0" class="btn btn--primary btn--md width-100%">Sign up</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>