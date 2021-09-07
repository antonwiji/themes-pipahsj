<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" >
    <!-- owl Corausel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- end Owl Corausel -->
    <link rel="stylesheet" href="css/style.css">
    <title><?= the_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="bawah">
      <ul>
        <li style="margin-right: 7px;">Sales Canter </li>
        <li><i class="bi bi-whatsapp"></i>+<a href="https://api.whatsapp.com/send?phone=<?= get_theme_mod('wa_setting'); ?>"> <?= get_theme_mod('wa_setting'); ?></a></li>
        <li><i class="bi bi-telephone"></i><a href="tel:<?= get_theme_mod('telp_setting'); ?>"> <?= get_theme_mod('telp_setting'); ?></a></li>
        <li><i class="bi bi-envelope"></i><a href="mailto:<?= get_theme_mod('email_setting'); ?>"> <?= get_theme_mod('email_setting'); ?></a></li>    
        <header>
              </ul>
        </div>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background:linear-gradient(#FFFB00, #FFFB12);">
  <div class="container">
    <a class="navbar-brand" href="http://localhost/pipahsj/"><img src="<?php echo get_theme_file_uri('/img/logohsj.png'); ?>" alt="logo" width="80"><span class="fs-6">Harapan Sarana Jaya</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="http://localhost/pipahsj/">BERANDA</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PRODUK
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="http://localhost/pipahsj/produk/rucika-lite/">Rucika LITE</a></li>
            <li><a class="dropdown-item" href="http://localhost/pipahsj/produk/rucika-safe-and-lok/">Rucika Safe And Lok</a></li>
            <li><a class="dropdown-item" href="http://localhost/pipahsj/produk/rucika-black/">Rucika Black</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/pipahsj/hubungi-kami/">HUBUNGI KAMI</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
