<?php get_header();
/*
Template Name:  blog
*/
?>
    <div class="container-fluid blog__intro" style="background-image: url(<?php the_field('blog_intro_image'); ?>);">
        <div class="blog__introContent">
            <?php if( get_field('title_page') ): ?>
                <h1><?php the_field('title_page'); ?></h1>
            <?php endif; ?>
            <?php if( get_field('sub_title') ): ?>
                <p><?php the_field('sub_title'); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="actuality__articlesWrapper row ml-0 mb-5">
        <?php
        $args= array(
            'posts_per_page' => 6,
            'paged' => $paged
        );
        $the_query = new WP_Query( $args );
        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                ?>
                <div class="actuality__articles card col-md-6 col-sm-12">
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
    <script type="text/javascript">
        var current_page = <?= $paged; ?>;
        var max_paged = <?= $the_query->max_num_pages; ?>
    </script>
        <div class="container">
            <div class="row button_more">
                <a href="#" title="Read more" class="button">read more</a>
            </div>
        </div>

<?php get_footer(); ?>