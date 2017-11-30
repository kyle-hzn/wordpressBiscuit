<?php get_header(); ?>
    <div id="content">
        <section class="home-intro">
            <?php
            // Ici je dis quel type de contenu récupérer
            $args= array(
                'post_type' => 'home',
                'home_content' => 'introduction'
            );

            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() )
            {
                while ( $the_query->have_posts() )
                {
                    $the_query->the_post();
                    ?>
                    <div class="intro-background-wrapper">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_excerpt(); ?></p>
                        <div class="thumbnail">
                            <?php
                            if(has_post_thumbnail())
                            {
                                the_post_thumbnail("hub_movie_thumbnail");
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            }
            ?>
        </section>
        <section class="citation">
            <?php
            // Ici je dis quel type de contenu récupérer
            $args= array(
                'post_type' => 'home',
                'home_content' => 'citation'
            );
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() )
            {
                $the_query->the_post();
                ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php
            }
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
        </section>
        <section class="home-biography">
            <?php


            // Ici je dis quel type de contenu récupérer
            $args= array(
                'post_type' => 'home',
                'home_content' => 'biographie',
                'meta_key'			=> 'rang_sur_la_home',
                'orderby'			=> 'meta_value',
                'order'      => 'ASC'
            );

            $the_query = new WP_Query( $args );
            $i=0;
            // The Loop
            if ( $the_query->have_posts() )
            {
                while ( $the_query->have_posts() )
                {
                    if ($i % 2 == 0){
                        $the_query->the_post();
                        ?>
                        <div class="bio-content-wrapper">
                            <div class="thumbnail">
                                <?php
                                if(has_post_thumbnail())
                                {
                                    the_post_thumbnail("hub_movie_thumbnail");
                                }
                                ?>
                            </div>
                            <div class="home-bio-text-wrapper">
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_excerpt(); ?></p>
                                <p><?php the_field("rang_sur_la_home"); ?></p>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                    else {
                        $the_query->the_post();
                        ?>
                        <div class="bio-content-wrapper">
                            <div class="home-bio-text-wrapper-2">
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_excerpt(); ?></p>
                                <p><?php the_field("rang_sur_la_home"); ?></p>
                            </div>
                            <div class="thumbnail-2">
                                <?php
                                if(has_post_thumbnail())
                                {
                                    the_post_thumbnail("hub_movie_thumbnail");
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            }
            ?>
        </section>

        <?php if( get_field('introduction') ): ?>
            <h2><?php the_field('introduction'); ?></h2>
        <?php endif; ?>

        <?php if( get_field('title_biography') ): ?>
            <h4><?php the_field('title_biography'); ?></h4>
        <?php endif; ?>

        <?php if( get_field('content_biography') ): ?>
            <p><?php the_field('content_biography'); ?></p>
        <?php endif; ?>

    </div> <!-- /content -->
<?php get_footer(); ?>