<?php get_header(); //appel du template header.php  ?>

<div id="content" class="single-content-wrapper">

    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
        the_post();
        ?>
        <!--IMAGE INTRO-->
        <div class="img-responsive thumbnail">
                <?php
                if(has_post_thumbnail())
                {
                    the_post_thumbnail();
                    
                }
                ?>
        </div>
        <div class="container">
    
        <!--ARTICLE-->
            <div class="article-content row">
                <div class="col-md-12">
                    <h1 class="article-title"><?php the_title(); ?></h1>
                    <p class="article-text"><?php the_content(); ?></p>
                    <h4 class="article-date">Publié le <?php the_time('F jS, Y') ?></h4>
                </div>
            </div>
            
            <div class="row article-end">
                <div class="all-articles"><a href="<?php echo get_option('home'); ?>" class="card-btn btn ">
                    <p class="home-return">Retour à l'accueil</p><img src="<?php echo IMAGES_URL?>/arrow-right.svg" alt="Accueil"> </a>
                </div>
            </div>
            
        </div>
        
        <?php
        }
    }
    else {
        ?>
        Nous n'avons pas trouvé d'article répondant à votre recherche
        <?php
    }
    ?>


</div><!-- /content -->

<?php get_footer(); //appel du template footer.php ?>