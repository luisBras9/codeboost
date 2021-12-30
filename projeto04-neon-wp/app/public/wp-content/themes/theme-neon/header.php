<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary Meta Tags -->
  <title><?php bloginfo('name')?><?php wp_title('-')?></title>
  <meta name="title" content="Redesign Neon - Banco 100% digital">
  <meta name="description" content="A conta digital certa pra cuidar bem do seu dinheiro">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://matheuscostadesign.github.io/codeboost/projeto03-neon/">
  <meta property="og:title" content="Redesign Neon - Banco 100% digital">
  <meta property="og:description" content="A conta digital certa pra cuidar bem do seu dinheiro">
  <meta property="og:image" content="https://matheuscostadesign.github.io/codeboost/projeto03-neon/img/share-img.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://matheuscostadesign.github.io/codeboost/projeto03-neon/">
  <meta property="twitter:title" content="Redesign Neon - Banco 100% digital">
  <meta property="twitter:description" content="A conta digital certa pra cuidar bem do seu dinheiro">
  <meta property="twitter:image"
    content="https://matheuscostadesign.github.io/codeboost/projeto03-neon/img/share-img.jpg">

  <!-- Favicon -->
  <link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.png" type="image/png">

  <!-- Styles -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://unpkg.com/swiper@6.7.5/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.min.css">

  <?php wp_head();?>

</head>

<body>
  
  <header>
    <div class="container">
      <a href="./" class="logo">
        <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Logo Neon">
      </a>
      <nav>

      <!-- Header Principal -->
      <?php
        $args = array(
          'menu' => 'Header Principal',
          'theme_location' => 'header-principal',
          'container' => false
        );
        wp_nav_menu( $args );
      ?>

        <!-- <ul>
          <li><a href="<?php echo get_permalink(get_page_by_path('Produtos')) ?>">Produtos</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('Conta')) ?>">Conta digital PJ</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('Quem Somos')) ?>">Quem Somos</a></li>
          <li><a href="<?php echo get_permalink(get_page_by_path('Blog')) ?>">Blog</a></li>
          <li><a href="#">Ajuda</a></li>
        </ul> -->

        <button class="btn-secondary white">Abra sua conta digital</button>
        <button class="btn-mobile"><img src="<?php echo get_template_directory_uri() ?>/img/btn-mobile.svg" alt="Menu Mobile"></button>
      </nav>
    </div>
  </header>