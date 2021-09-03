<?php get_header(); ?>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-2">
        <?php 
        $produk = new WP_Query(array(
            'post_type' => 'produk',
            'posts_per_page' => '-1'
        ));

        if($produk->have_posts()) : 
            while($produk->have_posts()): $produk->the_post();?>

       <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><hr>

        <?php
            endwhile;
        endif;
        wp_reset_postdata();
    ?>
        </div>
        <div class="col-md-10">
            
            <img data-aos="zoom-in" class="img img-fluid mb-4" src="<?php the_field('sampul_produk'); ?>" alt="foto produk">
            <div data-aos="zoom-in">
            <h3 style="color: black;"><?php the_title(); ?></h3>
            <p><?= the_field('diskripsi');?></p></div>
            <hr>
            <h3>Produk</h3>
            <div data-aos="zoom-in">
            <?php the_content(); ?>
            <hr>
            <h3>Daftar Harga</h3>
            
            <a href="<?php the_field('file_harga'); ?>"><img width="60px" src="<?= get_theme_file_uri('img/file_pdf.webp'); ?>" alt="pdf"></a>
    
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>