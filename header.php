<?php
/**
 * The header for our theme.
 */
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php wp_title(); ?></title>
</head>

<body>
    <header class="site-header">
        <div class="nav-container">
            <div class="logo-section">
                <h1>ANGERLO'S <span>NIEUWS</span></h1>
            </div>
            <div class="separator"></div>
            <nav class="nav-bar">
                <a href="#">Laatste Nieuws</a>
                <a href="#">Laatste Editie</a>
                <a href="#">AN Supporter</a>
                <a href="#">Contact</a>
            </nav>
            <button class="login-button">Inloggen</button>
        </div>
    </header>
</body>

</html>