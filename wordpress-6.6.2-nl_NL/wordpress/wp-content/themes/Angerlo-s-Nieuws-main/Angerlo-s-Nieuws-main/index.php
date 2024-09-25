<?php get_header(); ?>  <!-- Voeg de header toe -->

<main class="main-content">
  <div class="content-wrapper">
    <div class="main-story">
      <h2>Main Storybbbbbbbb</h2>
      <?php if (have_posts()) : ?>  <!-- Controleer of er berichten zijn -->
          <?php while (have_posts()) : the_post(); ?>  <!-- Begin de loop -->
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <h3 class="entry-title">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  <!-- Link naar het bericht -->
                  </h3>
                  <div class="entry-content">
                      <?php the_excerpt(); ?>  <!-- Toon een samenvatting van het bericht -->
                  </div>
              </article>
          <?php endwhile; ?>
      <?php else : ?>
          <p><?php _e('Geen berichten gevonden.'); ?></p>  <!-- Bericht als er geen berichten zijn -->
      <?php endif; ?>
    </div>

    <div class="side-stories">
      <div class="small-block">Small Block 1</div>
      <div class="small-block">Small Block 2</div>
      <div class="small-block">Small Block 3</div>
    </div>
  </div>

  <div class="weather-section">
    <h3>Het Weer in Angerlo</h3>
    <div class="weather-days">
      <div class="day">Maandag - 10°C</div>
      <div class="day">Dinsdag - 12°C</div>
      <div class="day">Woensdag - 15°C</div>
      <div class="day">Donderdag - 13°C</div>
      <div class="day">Vrijdag - 14°C</div>
      <div class="day">Zaterdag - 16°C</div>
      <div class="day">Zondag - 17°C</div>
    </div>
  </div>
</main>

<?php get_footer(); ?>  <!-- Voeg de footer toe -->
