<?php
/*
*/

get_header()
?>
    <div id="content">
        <section class="home-intro">

            <div class="intro-background-wrapper">
                <div class="container intro__content">
                    <?php if( get_field('title_page') ): ?>
                        <h1><?php the_field('title_page'); ?></h1>
                    <?php endif; ?>

                    <?php if( get_field('sub_title') ): ?>
                        <p><?php the_field('sub_title'); ?></p>
                    <?php endif; ?>
                    <p>SCROLLER VERS LE BAS</p>
                </div>

                <div class="thumbnail">


                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        </section>
        <section class="citation" style="color:white;">
            <?php if( get_field('introduction') ): ?>
                <p class="citation__content"><?php the_field('introduction'); ?></p>
            <?php endif; ?>
        </section>

        <div>
            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
        </div>


        <section class="home-biography">

            <div class="bio-content-wrapper">
                <div class="thumbnail">
                    <?php

                    $image = get_field('biography_image');

                    if( !empty($image) ): ?>

                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                    <?php endif; ?>

                </div>
                <div class="home-bio-text-wrapper">
                    <div>

                    <?php if( get_field('title_biography') ): ?>
                        <h1><?php the_field('title_biography'); ?></h1>
                    <?php endif; ?>

                    <?php if( get_field('content_biography') ): ?>
                        <p><?php the_field('content_biography'); ?></p>
                    <?php endif; ?>
                    </div>

                </div>

            </div>
        </section>







        <!-- PERCEVERANT SECTION-->
        <section class="home-biography">

            <div class="bio-content-wrapper">
                <div class="home-bio-text-wrapper-2">
                    <div>

                        <?php if( get_field('title_perceverant') ): ?>
                            <h1><?php the_field('title_perceverant'); ?></h1>
                        <?php endif; ?>

                        <?php if( get_field('content_perceverant') ): ?>
                            <p><?php the_field('content_perceverant'); ?></p>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="thumbnail-2">
                    <?php

                    $image = get_field('perceverant_image');

                    if( !empty($image) ): ?>

                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                    <?php endif; ?>

                </div>


            </div>
        </section>


        <!-- REVOLUTIONNARY SECTION-->
        <section class="home-biography">

            <div class="bio-content-wrapper">

                <div class="thumbnail">
                    <?php

                    $image = get_field('revolutionnaire_image');

                    if( !empty($image) ): ?>

                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                    <?php endif; ?>

                </div>

                <div class="home-bio-text-wrapper">
                    <div>

                        <?php if( get_field('title_revolutionnaire') ): ?>
                            <h1><?php the_field('title_revolutionnaire'); ?></h1>
                        <?php endif; ?>

                        <?php if( get_field('content_revolutionnaire') ): ?>
                            <p><?php the_field('content_revolutionnaire'); ?></p>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </section>












    </div> <!-- /content -->
<?php get_footer(); ?>