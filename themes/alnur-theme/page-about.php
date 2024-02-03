<?php get_header();?>

<!-- The WordPress Loop starts here: loads post contents -->

<?php if ( have_posts()) :
    while ( have_posts() ):
        the_post();?>
        <section id="about-hero-banner" class="hero-banner">
            <?php the_post_thumbnail('full', array (
                'class'=>'hero-banner__img'
            ));?>
            <h1 class="hero-banner__heading hero-banner__heading--white">About</h1>
        </section>

        <!-- Our Story Section -->
        <section id="about-story" class="story desc__container">
            <h2 class="desc__heading">Our Story</h2>
            <p class="desc__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="desc__paragraph">Tristique senectus et netus et malesuada. Elementum curabitur vitae nunc sed. Tincidunt praesent semper feugiat nibh sed pulvinar proin gravida hendrerit. Aliquam sem et tortor consequat id.</p>
        </section>

        <!-- Our Team Section -->
        <section id="about-team" class="team desc__container">
            <h2 class="desc__heading">Our Team</h2>
            <p class="desc__paragraph">Eget mi proin sed libero enim sed. Pellentesque elit eget gravida cum sociis natoque penatibus et. Amet mattis vulputate enim nulla. Odio pellentesque diam volutpat commodo sed egestas. Sodales ut eu sem integer vitae justo eget magna fermentum. Nullam non nisi est sit amet facilisis magna etiam tempor. </p>
            <p class="desc__paragraph">Malesuada pellentesque elit eget gravida cum sociis natoque. Nisl nisi scelerisque eu ultrices vitae.</p>
        </section>

        <?php the_content();?>
    <?php endwhile; else: ?>
        <p><?php esc_html_e( 'Sorry!! There is no posts available' );?></p>
<?php endif;?>

<?php get_footer();?>