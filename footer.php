<?php

// if (!$footer_rendered):

    // Start van de aangepaste footer
    ?>
    <footer id="colophon" class="site-footer custom-footer">
        <div class="footer-container">
            <!-- Contactinformatie -->
            <div class="footer-contact">
                <h3>Contact</h3>
                <p>Tel: 0316-582617</p>
                <p>E-mail: <a href="mailto:info@angerlosnieuws.nl">info@angerlosnieuws.nl</a></p>
            </div>
            
            <!-- Logo of merknaam -->
            <div class="footer-logo">
			<img class="angerlos-nieuws" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="angerlos-nieuws">

            </div>
        </div>
    </footer>
    <?php
    // Einde van de aangepaste footer

// endif;

wp_footer();
?>

</body>
</html>
