<?php 
// page: Product Type Archive Page
get_header();
?>
<?php
    $term = get_term_by(
        'slug',
        get_query_var('term'),
        get_query_var('taxonomy'),
    );

    // echo '<pre>', print_r($term), '</pre>';
    // echo $term->name;
?>

<section id="product-type" class="product-type-header">
    <h2 class="product-type__heading"><?php echo $term->name;?></h2>
    <p class="product-type__desc"><?php echo $term->description;?></p>
</section>

<section id="products" class="products-container">
    <?php if( have_posts()) :
    
    //The Wordpress loop: loads post content
        while (have_posts()):
            the_post();?>
            <div class="products__list">
                <a class="products__link" href="<?php echo the_permalink();?>">
                    <?php the_post_thumbnail('thumbnail');?>
                    <figcaption class="shop-card__caption">
                        <p><?php echo the_title();?></p>
                        <p><?php echo get_post_meta($post->ID, 'Price', true);?></p>
                    </figcaption>
                </a>
            </div>
        <?php endwhile;?>
    <?php else: ?>
        <p>No post found</p>
    <?php endif;?>
</section>
<?php get_footer();?>