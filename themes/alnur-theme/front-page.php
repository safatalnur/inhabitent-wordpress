<?php get_header();?>

<!-- The WordPress Loop starts here: loads post contents -->

<?php if ( have_posts()) :
    while ( have_posts() ):
        the_post();?>
        <section id="home-hero-banner" class="hero-banner">
            <?php the_post_thumbnail('full', array (
                'class'=>'hero-banner__img'
            ));?>
            <img class="hero-banner__logo" src="<?php echo wp_get_attachment_image_src(16)[0];?>">
            <!-- The following codes will print out on the screen (just like console.log in js) -->
            <!-- <?php $logo_img = wp_get_attachment_image_src(16);
                print_r($logo_img);
            ?> -->
            <!-- ########## -->
        </section>
        <section id="home-shop" class="home-shop">
            <h2 class="home-shop__heading">Shop Stuff</h2>

            <div class="home-shop__container">
                <?php 
                    $terms = get_terms(array(
                        'taxonomy'  => 'product-type',
                        'hide-empty'    => false,
                        'orderby'   => 'name',
                        'order' => 'ASC',
                    )); 

                    if( ! empty($terms)):
                ?>
                    <div class="home-shop__list">
                        <?php foreach ($terms as $term) :?>
                            <div class="home-shop__item">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/svg/<?php echo $term->slug;?>.svg">
                                <p><?php echo $term->description;?></p>
                                <div class="btn home-shop__btn">
                                    <a class="btn--green" href="<?php echo get_term_link($term);?>"><?php echo $term->name;?> stuff</a>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <?php endif;?>
            </div>
        </section>
        <?php the_content();?>
    <?php endwhile; else: ?>
        <p><?php esc_html_e( 'Sorry!! There is no posts available' );?></p>
<?php endif;?>

<?php get_footer();?>