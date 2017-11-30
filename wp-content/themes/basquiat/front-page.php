<?php
/*
Template Name:  home
*/

get_header() ?>
<div id="content" >
    <section class="home-intro">
        <div class="intro-background-wrapper">
            <div class="intro__content container">
                <?php if( get_field('title_page') ): ?>
                    <h1><?php the_field('title_page'); ?></h1>
                <?php endif; ?>

                <?php if( get_field('sub_title') ): ?>
                    <p><?php the_field('sub_title'); ?></p>
                <?php endif; ?>
                <p>SCROLLER VERS LE BAS</p>
            </div>
            <div class="thumbnail home-intro__bkg">
                <img class="img-fluid" src="<?php the_post_thumbnail(); ?>" alt="home-intro-image">
            </div>
        </div>
    </section>
    <section class="citation" style="color:white;">
        <p class="citation__decoration">[...]</p>
        <?php if( get_field('introduction') ): ?>
            <p class="citation__content"><?php the_field('introduction'); ?></p>
        <?php endif; ?>
        <div class="citation__titleBkg">
            intro
        </div>
    </section>

    <section class="home-profile">

        <div class="profil-content-wrapper ">

            <div class="home-profile-text-wrapper ">
                <div class="home-profile-text-wrapper__text">

                    <?php if( get_field('title_biography') ): ?>
                        <h1><?php the_field('title_biography'); ?></h1>
                    <?php endif; ?>

                    <?php if( get_field('content_biography') ): ?>
                        <p><?php the_field('content_biography'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="thumbnail briography-image">
                    <?php

                    $image = get_field('biography_image');

                    if( !empty($image) ): ?>

                        <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                </div>

            </div>

        </div>
    </section>
    <div class="container">


        <!-- PERCEVERANT SECTION-->
        <section class="home-perceverant">

            <div class="perceverant-content-wrapper">

                <div class="perceverant-content-img thumbnail">
                    <?php

                    $image = get_field('perceverant_image');

                    if( !empty($image) ): ?>

                        <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                </div>
                <div class="home-perceverant-text-wrapper">
                    <div>

                        <?php if( get_field('title_perceverant') ): ?>
                            <h1><?php the_field('title_perceverant'); ?></h1>
                        <?php endif; ?>

                        <?php if( get_field('content_perceverant') ): ?>
                            <p><?php the_field('content_perceverant'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <div class="home__decorationPaint"></div>



        <!-- REVOLUTIONNARY SECTION-->
        <section class="home-revolution">
            <div class="revolution-content-wrapper">
                <div class="home-revolution-text-wrapper">
                    <div>
                        <?php if( get_field('title_revolutionnaire') ): ?>
                            <h1><?php the_field('title_revolutionnaire'); ?></h1>
                        <?php endif; ?>

                        <?php if( get_field('content_revolutionnaire') ): ?>
                            <p><?php the_field('content_revolutionnaire'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="thumbnail revolution-content-img">
                    <?php

                    $image = get_field('revolutionnaire_image');

                    if( !empty($image) ): ?>

                        <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                    <?php endif; ?>

                </div>
            </div>
        </section>
    </div>

    <!-- HISTORY-->
    <section class="history">
        <div class="history__direction container">
            <a href="<?php echo get_permalink( get_page_by_title( 'biographie' ) ); ?>">
                <div class="history__directionText"> Lire l’histoire de Basquiat</div>
                <div class="history__directionArrow">
                    <img class="img-fluid" src="<?php echo IMAGES_URL?>/arrow-right.svg" >
                </div>
                <hr class="history__directionSeparator">
            </a>
        </div>
        <div class="history__bkgImage">
            <img class="img-fluid" src="<?php echo IMAGES_URL?>/brush2.png" alt="brush decoration">
        </div>


        <?php if( get_field('title_galerie') ): ?>
            <div class="history__titleBkg">
                <?php the_field('title_galerie'); ?>
            </div>
        <?php endif; ?>


        <div class="history__slider">
            <div class="slider__description container mt-5">
                <?php if( get_field('title_galerie') ): ?>
                    <h3 class="slider__title"><?php the_field('title_galerie'); ?></h3>
                <?php endif; ?>

                <?php if( get_field('description_gallerie') ): ?>
                    <p class="slider__paragraph"><?php the_field('description_gallerie'); ?></p>
                <?php endif; ?>
            </div>

            <div class="slider__elements container">
                <div class="slider__elementsBkgImage">
                    <img class="img-fluid" src="<?php echo IMAGES_URL?>/paint1.png" alt="paint decoration">
                </div>
                <div class="slider__elSlide elSlide1">
                    <div class="slide__filter"></div>
                    <img class="img-fluid" src="<?php echo IMAGES_URL?>/galerie1.png" alt="artwork">
                </div>

                <div class="slider__elSlide elSlide2 pl-3">
                    <div class="slide__filter"></div>
                    <img class="img-fluid" src="<?php echo IMAGES_URL?>/galerie2.png" alt="artwork">
                </div>

                <div class="slider__elSlide elSlide3 pl-3">
                    <div class="slide__filter"></div>
                    <img class="img-fluid" src="<?php echo IMAGES_URL?>/galerie3.png" alt="artwork">
                </div>
            </div>

        </div>

    </section>


    <!-- ACTUALITY-->
    <section class="actuality">
        <div class="actuality__direction container">
            <a href="<?php echo get_permalink( get_page_by_title( 'gallery' ) ); ?>">
                <div class="actuality__directionText"> Voir la galerie</div>
                <div class="actuality__directionArrow">
                    <img class="img-fluid" src="<?php echo IMAGES_URL?>/arrow-right.svg" >
                </div>
                <hr class="actuality__directionSeparator">
            </a>
        </div>
        <div class="actuality__bkgImage">
            <img class="img-fluid" src="<?php echo IMAGES_URL?>/brush2.png" alt="brush decoration">
        </div>
        <?php if( get_field('title_actuality') ): ?>
            <div class="actuality__titleBkg">
                <?php the_field('title_actuality'); ?>
            </div>
        <?php endif; ?>
        <div class="container">
            <?php if( get_field('title_actuality') ): ?>
                <h3 class="actuality__title slider__title mt-5"><?php the_field('title_actuality'); ?></h3>
            <?php endif; ?>


            <div class="actuality__articlesWrapper row ml-0 mt-5">
                <?php
                $args= array(
                    'posts_per_page' => 3
                );
                $the_query = new WP_Query( $args );
                // The Loop
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        ?>
                        <div class="actuality__articles card col-md-4 col-sm-12">
                            <div class="actuality-thumbnail">
                                <?php
                                if(has_post_thumbnail())
                                {
                                    the_post_thumbnail("hub_article_thumbnail");
                                }
                                ?>
                            </div>

                            <div class="card-block">
                                <h1 class="card-title"><?php the_title() ?></h1>
                                <h4 class="card-date"><?php the_time('F jS, Y') ?></h4>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink() ?>" class="card-btn btn ">
                                    <p>Lire l'article</p><img src="<?php echo IMAGES_URL?>/arrow-right.svg"></a>
                            </div>
                        </div>
                        <?php
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata();
                }
                ?>
            </div>
        </div>
        <a href="<?php echo get_permalink( get_page_by_title( 'blog' ) ); ?>">
            <div class="blog__directionText mt-5"> Voir le blog</div>
            <div class="blog__directionArrow">
                <img class="img-fluid" src="<?php echo IMAGES_URL?>/arrow-right.svg" >
            </div>
            <hr class="actuality__directionSeparator">
        </a>
    </section>
</div>

<div class="container-fluid home__footer">
    <section class="home__footerImg" >
        <img class="img-fluid" src="<?php echo IMAGES_URL?>/home__footerImg.png" alt="">

    </section>
</div>
<!-- /container-->
</div> <!-- /content -->
<?php get_footer(); ?>