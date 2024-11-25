<?php

if (!$footer_rendered):
    echo '<p style="color: red;">Footer geladen!</p>'; // Testregel
endif;

    ?>
    <footer id="colophon" class="site-footer custom-footer">
        <div class="footer-container">
            <div class="footer-contact">
                <h3>Contact</h3>
                <p>Tel: 0316-582617</p>
                <p>E-mail: <a href="mailto:info@angerlosnieuws.nl">info@angerlosnieuws.nl</a></p>
            </div>
            
            <div class="footer-logo">
                <h1>ANGERLO'S</h1>
                <p>NIEUWS</p>
            </div>
        </div>
    </footer>

    <?php


wp_footer();
?>

</body>
</html>
