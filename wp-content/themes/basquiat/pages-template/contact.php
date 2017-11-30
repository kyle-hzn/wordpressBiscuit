<?php
/*
Template Name:  contact
*/
?>
<?php get_header(); ?>
    <div class="container-fluid contact__intro">
        <div class="contact__imageWrapper" style="background-image: url(<?php the_field('contact_image'); ?>);"></div>
        <div class="col contact__text">
            <?php if( get_field('contact_intro') ): ?>
                <h1><?php the_field('contact_intro'); ?></h1>
            <?php endif; ?>
        </div>
    </div>
    <div class="container contact__items">
        <div class="col">
            <?php echo do_shortcode('[wpforms id="160" title="false" description="false"]'); ?>
        </div>
    </div>
    </div> <!-- /content -->

<?php get_footer(); ?>