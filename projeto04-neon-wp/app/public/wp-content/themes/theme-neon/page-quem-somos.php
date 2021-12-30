<?php
  // Template name: Quem Somos
  ?>

<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1>Página Quem Somos</h1>

<?php endwhile; else: endif; ?>

<?php get_footer();?>