<?php get_header();?>

<section id="archive-nav" class="shop-nav">
    <h1 class="shop-nav__heading">Shop stuff</h1>

    <div class="shop-nav__container">
        <ul class="shop-nav_list">
            <?php $shops = get_terms( array (
                'taxonomy'  => 'product-type',
                'orderby'   => 'name',
                'order'     => 'ASC',
            ));
            foreach ($shops as $shop) {
                echo '<li class="shop-nav__item"><a class="shop-nav__link" href="' . get_term_link($shop) . '">' . $shop->name . '</a></li>';
            }
            ;?>
        </ul>
    </div>

</section>

<section id="archive-products" class="shop__container">
<?php if ( have_posts()) :
    $testings = query_posts(array(
        'post_type' => 'products',
    ));    
    while ( have_posts() ):
        the_post();?>
        <div class="shop-card">
            <a class="shop-card__link" href="<?php the_permalink();?>">
                <img class="shop-card__img" src="<?php the_post_thumbnail_url('thumbnail');?>">
                <figcaption class="shop-card__caption">
                    <p><?php echo the_title();?></p>
                </figcaption>
            </a>
        </div>
        <?php the_content();?>
    <?php endwhile; else: ?>
        <p><?php esc_html_e( 'Sorry!! There is no posts available' );?></p>
<?php endif;?>

</section>
<!-- The WordPress Loop starts here: loads post contents -->


<?php get_footer();?>