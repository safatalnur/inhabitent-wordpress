<?php 
// page: Single Product page
get_header();
?>

<section id="single-product" class="single-product">
    <?php if (have_posts()):

    // The WordPress Loop: loads post content
        while( have_posts() ):
            the_post();?>

            <section class="single-product__image">
                <?php the_post_thumbnail('large');?>
            </section>

            <section class="single-product__content">
                <h1 class="single-product__heading"><?php the_title();?></h1>
                <h2 class="single-product__price">$ <?php echo get_post_meta($post->ID, 'Price', true);?></h2>
                <p class="single-product__desc"><?php the_content();?></p>

                <div class="single-product__social">
                    <ul class="single-product__social-lists">
                        <li class="">Like</li>
                        <li class="">Tweet</li>
                        <li class="">Pin</li>
                    </ul>
                </div>
            </section>
        <?php endwhile;?>

    <?php else : ?>
        <p>No posts available</p>
    <?php endif;?>
</section>

<?php get_footer();?>