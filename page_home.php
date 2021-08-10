<?php

/**
 * Template name: Home Theme
 *
 * @package My Theme
 * @since 1.0
 */
?>

<?php get_header(); ?>

<div id="container">
    <?php the_post(); ?>

    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <section class="hero padding-y-xxl" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/hero-img-1.jpg')">
            <div class="container max-width-adaptive-sm">
                <div class="text-center">
                    <div class="text-sm opacity-60% margin-bottom-xxs">This is a Label</div>

                    <div class="text-component margin-bottom-sm">
                        <h1>Cody / Alpina Digital</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam vero aliquam, natus quae architecto hic quod!</p>
                    </div>

                    <div class="flex flex-wrap flex-center gap-sm">
                        <a href="#0" class="btn btn--primary">Download</a>
                        <a href="#0" class="color-inherit">Learn more</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="hero padding-y-xl">
            <div class="container">

                <h2>Alguns de nossos clientes</h2>

                <div class="carousel flex flex-column js-carousel" data-drag="on">
                    <p class="sr-only">Carousel items</p>

                    <div class="carousel__wrapper order-2 overflow-hidden">
                        <ol class="carousel__list">

                            <?php
                                $banners = 0;
                                $args = array (
                                    'post_type' => array('carousel')
                                );
                                $query = new WP_Query( $args );
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                        $carouselBgs = rwmb_meta( 'carousel_img', 'size=full' );
                                        $carouselBgs = rwmb_meta( 'carousel_img', 'type=image&size=full' );
                                        if ( !empty( $carouselBgs ) ) {
                                            foreach ($carouselBgs as $carouselBg => $headerBg){
                                                ?>
                                                    <li class="carousel__item">
                                                        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">
                                                            <a href="<?php echo rwmb_meta('carousel_link'); ?>" style="padding: 0 15px;">
                                                                <img src="<?php echo $headerBg['url']; ?>" alt="" style="object-fit: cover;">
                                                            </a>
                                                        </div>
                                                    </li>

                                                <?php
                                            }
                                        }
                                    } 
                                } wp_reset_postdata();
                            ?>
                        </ol>
                    </div>

                    <nav class="margin-bottom-xs order-1 no-js:is-hidden">
                        <ul class="flex gap-xxxs justify-end">
                            <li>
                                <button class="reset carousel__control carousel__control--prev js-carousel__control js-tab-focus">
                                    <svg class="icon" viewBox="0 0 20 20">
                                        <title>Show previous items</title>
                                        <polyline points="13 18 5 10 13 2" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                </button>
                            </li>

                            <li>
                                <button class="reset carousel__control carousel__control--next js-carousel__control js-tab-focus">
                                    <svg class="icon" viewBox="0 0 20 20">
                                        <title>Show next items</title>
                                        <polyline points="7 18 15 10 7 2" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </section>

        <div class="bg radius-md shadow-sm padding-md text-center">
            <div class="max-width-xs margin-x-auto">
                <div class="margin-bottom-xs">
                    <svg class="icon icon--xl" viewBox="0 0 64 64" aria-hidden="true">
                        <path d="M54.053,33.3l-21-13a2,2,0,0,0-2.106,0l-21,13A2,2,0,0,0,9,35V58a2,2,0,0,0,2,2H53a2,2,0,0,0,2-2V35A2,2,0,0,0,54.053,33.3Z" fill="#212121" />
                        <path d="M47,51H17V16a2,2,0,0,1,2-2H45a2,2,0,0,1,2,2Z" fill="#e3e3e3" />
                        <path d="M40,23H24a1,1,0,0,1,0-2H40a1,1,0,0,1,0,2Z" fill="#aeaeae" />
                        <path d="M40,30H24a1,1,0,0,1,0-2H40a1,1,0,0,1,0,2Z" fill="#aeaeae" />
                        <path d="M33,37H24a1,1,0,0,1,0-2h9a1,1,0,0,1,0,2Z" fill="#aeaeae" />
                        <path d="M55,35,32,45.867,9,35V58c0,.015,0,.029,0,.044a1.927,1.927,0,0,0,.027.26c.006.04.008.081.016.12l0,.016c0,.006.006.009.008.014A2,2,0,0,0,11,60H53a2,2,0,0,0,1.951-1.56A1.916,1.916,0,0,0,55,58.022c0-.008.006-.013.006-.022Z" fill="#949494" />
                        <path d="M13,7.029a3,3,0,0,1-3-3,1,1,0,0,0-2,0,3,3,0,0,1-3,3,1,1,0,0,0,0,2,3,3,0,0,1,3,3,1,1,0,0,0,2,0,3,3,0,0,1,3-3,1,1,0,0,0,0-2Z" fill="#ffd764" />
                        <circle cx="55" cy="14" r="3" fill="#ff7163" />
                    </svg>
                </div>

                <div class="text-component margin-bottom-md">
                    <h3>Join our newsletter</h3>
                    <p>Get our monthly recap with the latest news, articles and resources.</p>
                </div>

                <?php echo do_shortcode('[contact-form-7 id="87" title="newsletter"]'); ?>

                <!-- <form class="grid gap-xxs">
                    <input class="form-control" aria-label="Email" type="email" placeholder="Email Address">
                    <button class="btn btn--primary">Subscribe</button>
                </form> -->

                <!-- <p class="text-sm bg-success bg-opacity-20% padding-xs radius-md margin-top-xs" role="alert"><strong>✔ Success!</strong> Welcome aboard, friend!</p> -->

                <div class="margin-top-sm">
                    <p class="color-contrast-medium text-sm">No spam. Unsubscribe anytime.</p>
                </div>
            </div>
        </div>


        <?php if (get_post_custom_values('comments')) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page 
        ?>

    </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>