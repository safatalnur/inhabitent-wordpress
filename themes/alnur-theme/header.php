<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alnur Theme</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<nav class="nav-bar">
    <a class="nav-bar-left__logo" href="<?php echo get_home_url();?>">
        <img class="nav-bar-left__logo--green" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/svg/inhabitent-logo-tent.svg" atl="Green inhabitent logo">
        <img class="nav-bar-left__logo--white" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/svg/inhabitent-logo-tent-white.svg" atl="White inhabitent logo">
    </a>
    <div class="nav-bar-right">
        <?php wp_nav_menu(array(
            'theme_location'    => 'primary',
            'menu_class'        => 'nav-bar-right__list',
        ));?>
    </div>
    <!-- <?php if( !is_page('Home')){
        print_r("You are at home page");
    } else {
        print_r("YOu are not in home page");
    };?> -->
</nav>