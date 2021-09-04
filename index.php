<?php 
    get_header();
?>

<section id="hero" class="hero">
  <div class="owl-carousel owl-theme">
  
  <?php 
        $slider = new WP_Query(array(
            'post_type' => 'slider',
            'posts_per_page' => '-1'
        ));

        if($slider->have_posts()) : 
          while($slider->have_posts()): $slider->the_post();?>

  <div class="slide" style="background-image: url(<?php the_field('img_slider') ?>);">
    <div class="slide-content">
      <h1 mb-5><?= the_title(); ?></h1>
      <p><?php the_field('deskripsi'); ?></p>
      <a href="<?php the_field('url'); ?>" ><button class="btn btn-outline-light"><?php the_field('button_name'); ?></button></a>
    </div>
  </div>

  <?php
  endwhile;
endif;
  wp_reset_postdata();
    ?>
  </div>

</section>

<!-- end Hero -->

<!-- Produk -->
<section id="produk">
  <h2 class="pd-top mb-4" style="color: black;">Produk Pipa Pilihan</h2>
  <div class="container">
  
  <div class="row">
    <div class="col-md-6">
      <img class="img img-fluid" src="<?= get_theme_file_uri('img/Harga-Pipa-PVC-Limbah-Rucika.jpg'); ?>" alt="pipa_pvc" data-aos="zoom-in" data-aos-offset="200" data-aos-duration="1200">
    </div>
    <div class="col-md-6 pd-left pd-top" style="background-color: #FF720B;" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1200" data-aos-delay="500">

    <h3>Rucika LITE</h3>
    <p>Sejalan dengan meningkatnya kesadaran akan lingkungan hidup yang sehat dan asri, RUCIKA LITE merupakan sistem pipa uPVC (unplastized Polyvinyl Chloride) yang dirancang untuk menghindari sistem pembuangan terbuka.</p>
    
    <button class="btn btn-outline-dark"> Cek Harga </button>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 pd-left pd-top produk" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1200">
      <h3>Rucika Safe And Lok</h3>
    <p>Pipa PVC adalah sistem jaringan perpipaan uPVC sesuai Standar Nasional Indonesia (SNI) yang dirancang untuk mendistribusikan air minum dan air bersih ke masyarakat luas serta berbagai jenis proyek.</p>
    <button class="btn btn-outline-dark"> Cek Harga </button>
  </div>
    <div class="col-md-6" data-aos="zoom-in" data-aos-offset="200" data-aos-duration="1200" data-aos-delay="500">
      <img class="img img-fluid" src="<?= get_theme_file_uri('img/pipa_pvc.jpg'); ?>" alt="pipa_hdpe">
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <img class="img img-fluid" src="<?= get_theme_file_uri('img/pipa_hdpe.png'); ?>" alt="pipa_pvc" data-aos="zoom-in" data-aos-offset="200" data-aos-duration="1200">
    </div>
    <div class="col-md-6 pd-left pd-top bg-black" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1200" data-aos-delay="500">

    <h3>Rucika Black</h3>
    <p>RUCIKA BLACK merupakan sistem perpipaan yang terpercaya dengan karakteristik istimewa dan sesuai untuk aplikasi air minum karena terbuat dari Polyethylene (PE).</p>
    
    <button class="btn btn-outline-light"> Cek Harga </button>
    </div>
  </div>
   <div class="row">
     <div class="col bg-aksesoris">
      <div class="bg-text-aksesoris">
        <div class="bg-gelap"></div>
        <h2 data-aos="zoom-out">Aksesoris Pipa</h2>
        <h5 data-aos="zoom-out" class="mb-4" style="color: black;">Menjual Perlengkapan Aksesoris Pipa yang dibutuhkan untuk Proyek Anda</h5>
        <button data-aos="zoom-out" class="btn btn-light">Aksesoris PVC</button>
        <button data-aos="zoom-out" class="btn btn-dark">Aksesoris HDPE</button>
        
      </div>
      </div>
  
   </div>
    
  </div>
  </div>
</section>

<!-- end Produk -->

<!-- Aksesoris Pipa -->

<!-- End Pipa -->

<!-- halaman Hubungi kontak -->

<div class="bg-image">
  <div class="bg-text">
    <div data-aos="zoom-out">
    <h2 style="color: white;">Hubungi Kamu</h2>
    <p>Apabila anda memiliki pertanyaan, anda dapat langsung mengirimkannya kepada kami melalui email atau anda juga dapat menghubungi kami pada nomor hotline <?= get_theme_mod('telp_setting'); ?>.</p>
    </div>
    <div data-aos="fade-up">
    <a href="tel:<?= get_theme_mod('telp_setting'); ?>" class="btn btn-outline-light">Hubungi Kami</a>
    </div>
  </div>
</div>

<?php
    get_footer();
?>