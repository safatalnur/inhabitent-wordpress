<?php get_header();?>

<!-- The WordPress Loop starts here: loads post contents -->

<?php if ( have_posts()) :
    while ( have_posts() ):
        the_post();?>
        <section id="about-hero-banner" class="hero-banner">
            <?php the_post_thumbnail('full', array (
                'class'=>'hero-banner__img'
            ));?>
            <img class="hero-banner__logo" src="<?php echo wp_get_attachment_image_src(16)[0];?>">
            <!-- The following codes will print out on the screen (just like console.log in js) -->
            <?php $logo_img = wp_get_attachment_image_src(16);
                print_r($logo_img);
            ?>
            <!-- ########## -->
        </section>
        <?php the_content();?>
    <?php endwhile; else: ?>
        <p><?php esc_html_e( 'Sorry!! There is no posts available' );?></p>
<?php endif;?>

<?php get_footer();?>