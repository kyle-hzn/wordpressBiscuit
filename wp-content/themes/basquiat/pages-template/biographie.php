<?php
/*
Template Name: biographie
*/
?>
<?php get_header(); ?>
<div class="container-fluid biography__intro" style="background-image: url(<?php the_field('biography_intro_image'); ?>);">
    <div class="biography__introContent">
        <?php if( get_field('title_page') ): ?>
            <h1><?php the_field('title_page'); ?></h1>
        <?php endif; ?>
        <?php if( get_field('sub_title') ): ?>
            <p><?php the_field('sub_title'); ?></p>
        <?php endif; ?>
    </div>
</div>
<div class="container biography__1960">
    <div class="row h-50 align-items-center">
        <div class="biography__year1960"></div>
        <div class="col-md-6 biography__1960image">
            <?php

            $image = get_field('1960_image');

            if( !empty($image) ): ?>

                <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>
        </div>
        <div class="col-md-6 biography__1960text">
            <?php if( get_field('title_1960') ): ?>
                <h2><?php the_field('title_1960'); ?></h2>
            <?php endif; ?>
            <?php if( get_field('text_1960') ): ?>
                <p><?php the_field('text_1960'); ?></p>
            <?php endif; ?>        </div>
    </div>
</div>
<div class="container biography__1968">
    <div class="row h-50 align-items-center">
        <div class="biography__year1968"></div>
        <div class="col-md-6 biography__1960text">
            <?php if( get_field('title_1968') ): ?>
                <h2><?php the_field('title_1968'); ?></h2>
            <?php endif; ?>
            <?php if( get_field('text_1968') ): ?>
                <p><?php the_field('text_1968'); ?></p>
            <?php endif; ?>
        </div>
        <div class="col-md-6 biography__1968image">
            <?php

            $image = get_field('1968_image');

            if( !empty($image) ): ?>

                <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>
        </div>
    </div>
</div>
<div class="container biography__filligrane">
    <h2>Carrière artistique</h2>
</div>
    <div class="container biography__1976">
        <div class="row h-50 align-items-center">
            <div class="biography__year1976"></div>
            <div class="col-md-12 biography__1976text pb-5">
                <?php if( get_field('title_1976') ): ?>
                    <h2><?php the_field('title_1976'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('text_1976') ): ?>
                    <p><?php the_field('text_1976'); ?></p>
                <?php endif; ?>
            </div>
            <div class="col biography__1976image pr-1">
                <?php

                $image = get_field('1976_image');

                if( !empty($image) ): ?>

                    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
            </div>
            <div class="col biography__1976image pl-1">
                <?php

                $image = get_field('1976_image_bis');

                if( !empty($image) ): ?>

                    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container biography__1980">
        <div class="row h-50 align-items-center">
            <div class="biography__year1980"></div>
            <div class="col-md-6 biography__1980image">
                <?php

                $image = get_field('1980_image');

                if( !empty($image) ): ?>

                    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
            </div>
            <div class="col-md-6 biography__1980text">
                <?php if( get_field('title_1980') ): ?>
                    <h2><?php the_field('title_1980'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('text_1980') ): ?>
                    <p><?php the_field('text_1980'); ?></p>
                <?php endif; ?>        </div>
        </div>
    </div>
    <div class="container biography__1981">
        <div class="row h-50 align-items-center">
            <div class="biography__year1981"></div>
            <div class="col-md-12 biography__1981text">
                <?php if( get_field('title_1981') ): ?>
                    <h2><?php the_field('title_1981'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('text_1981') ): ?>
                    <p><?php the_field('text_1981'); ?></p>
                <?php endif; ?>        </div>
        </div>
    </div>
    <div class="container-fluid embed-container">
        <?php the_field('video_1981'); ?>
    </div>
    <div class="container biography__1983">
        <div class="row h-50 align-items-center">
            <div class="biography__year1983"></div>
            <div class="col-md-6 biography__1983text">
                <?php if( get_field('title_1983') ): ?>
                    <h2><?php the_field('title_1983'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('text_1983') ): ?>
                    <p><?php the_field('text_1983'); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-6 biography__1983image">
                <?php

                $image = get_field('1983_image');

                if( !empty($image) ): ?>

                    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container biography__filligrane2">
        <h2>Sa vie privée</h2>
    </div>
    <div class="container biography__1986">
        <div class="row h-50 align-items-center">
            <div class="biography__year1986"></div>
            <div class="col-md-12 biography__1986text pb-5">
                <?php if( get_field('text_1986') ): ?>
                    <p><?php the_field('text_1986'); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-7 biography__1986image pr-1">
                <?php

                $image = get_field('1986_image');

                if( !empty($image) ): ?>

                    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
            </div>
            <div class="col-md-5 biography__1986image pl-1">
                <?php

                $image = get_field('1986_image_bis');

                if( !empty($image) ): ?>

                    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
            </div>
            <div class="col-md-12 biography__1986textBis pb-5">
                <?php if( get_field('text_1986_bis') ): ?>
                    <p><?php the_field('text_1986_bis'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container biography__filligrane3">
        <h2>La fin du mythe</h2>
    </div>
    <div class="container biography__1987">
        <div class="row h-50 align-items-center">
            <div class="biography__year1987"></div>
            <div class="col-md-6 biography__1987image">
                <?php

                $image = get_field('1987_image');

                if( !empty($image) ): ?>

                    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
            </div>
            <div class="col-md-6 biography__1987text">
                <?php if( get_field('title_1987') ): ?>
                    <h2><?php the_field('title_1987'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('text_1987') ): ?>
                    <p><?php the_field('text_1987'); ?></p>
                <?php endif; ?>        </div>
        </div>
    </div>
    <div class="container biography__1988">
        <div class="row h-50 align-items-center justify-content-center">
            <div class="biography__year1988"></div>
            <div class="col-md-12 biography__1988text">
                <?php if( get_field('title_1988') ): ?>
                    <h2><?php the_field('title_1988'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('text_1988') ): ?>
                    <p><?php the_field('text_1988'); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-8 biography__1988image mt-5">
                <?php

                $image = get_field('1988_image');

                if( !empty($image) ): ?>

                    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
            </div>
        </div>
    </div>
<div class="container-fluid biography__last mt-5" style="background-image: url(<?php the_field('last_image'); ?>);"></div>

<?php get_footer(); ?>