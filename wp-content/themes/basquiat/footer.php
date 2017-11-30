<footer id="footer" class="container-fluid footer">
    <div class="row">
        <div class="footer__text col-md-4 col-sm-12">
            <img class="img-fluid footer__logo" src="<?php echo IMAGES_URL?>/logo-jeanMichelBasquiat.png" alt="logo-footer">
            <p>Jean-Michel Basquiat, étoile filante de l'art contemporain.</p>
        </div>
        <div class="footer__elements col-md-4 col-sm-12">
            <p>
                <?php
                $args=array(
                    'theme_location' => 'footer', // nom du slug
                    'menu' => 'footer_fr', // nom à donner cette occurence du menu
                    'menu_class' => 'menu_footer', // class à attribuer au menu
                    // voir les autres arguments possibles sur le codex
                );
                wp_nav_menu($args);
                ?>
            </p>
        </div>
        <div class="footer__socials col-md-4 col-sm-12">
            <ul>
                <li><a target="_blank" href="https://www.facebook.com/ArtistJeanMichelBasquiat/"><img class="img-fluid footer__socialIcon" src="<?php echo IMAGES_URL?>/facebook-icon.svg" alt="logo-facebook"></a></li>
                <li><a target="_blank" href="https://twitter.com/jmbasquiatart?lang=fr"><img class="img-fluid footer__socialIcon" src="<?php echo IMAGES_URL?>/twitter-icon.svg" alt="logo-twitter"></a></li>
                <li><a target="_blank" href="https://www.instagram.com/basquiatart/"><img class="img-fluid footer__socialIcon" src="<?php echo IMAGES_URL?>/instagram-icon.svg" alt="logo-instagram"></a></li>
            </ul>
        </div>
    </div>
</footer>
<?php wp_footer();  ?>
</body>
</html>