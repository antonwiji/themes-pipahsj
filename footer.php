
<section>
  <footer>
    <div class="bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4>CV Harapan Sarana Jaya</h4>
        <div class="row">
          <div class="col-1 pt-2">
            <span class="bi bi-envelope bg-putih"></span>
          </div>
          <div class="col-11">
            Email
            <p class="pb-3"><a style="color: white;" href="mailto:<?= get_theme_mod('email_setting'); ?>"><?= get_theme_mod('email_setting'); ?></a></p>
          </div>
          <div class="col-1 pt-4">
            <span class="bi bi-map bg-putih"></span>
          </div>
          <div class="col-11">
            Office
            <p class="pb-4">jln. Perum Indraloka Anda Kel. Sialang Sakti Kec. Tenayan Raya Kota Pekanbaru, Riau.</p>
          </div>
        </div>
      </div>
        <div class="col-md-4">
          <h4>Hubungi Kami</h4>
          <h5><a style="color: white;" href="tel:<?= get_theme_mod('telp_setting'); ?>"><?= get_theme_mod('telp_setting'); ?></a></h5>
        </div>
        <div class="col-md-4 padding-t">
          <h4>JUAL PIPA PVC SNI & HDPE</h4>
          <p>Butuh pipa PVC SNI atau pipa HDPE? Kami siap membantu anda memenuhi kebutuhan proyek perpipaan.</p>
        </div>
      </div>
    </div>
    <div class="py-1 border-top">Copyright© <?= date('Y') ?> CV HARAPAN SARANA JAYA. All Right Reserved.</div>
    </div>
  </footer>
</section>

<!-- end footer -->
<div class="container-fluid fixed-bottom">
  <div class="row mb-3">
    <div class="col d-flex justify-content-end">
      <div class="bg-light d-flex align-items-center rounded p-2 shadow">Hubungi Kami
        </div>
        <a href="https://api.whatsapp.com/send?phone=<?= get_theme_mod('wa_setting'); ?>"><img class="ms-3" width="40" src="<?= get_theme_file_uri('img/wa.png'); ?>" alt="wa"></a>
      </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true,
  
    });
  </script>
  <?php wp_footer(); ?>
  </body>
</html>