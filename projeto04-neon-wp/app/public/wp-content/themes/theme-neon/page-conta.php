<?php
  // Template name: Conta
  ?>

<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1>Página Conta Digital PJ</h1>

<?php endwhile; else: endif; ?>

<?php get_footer();?>