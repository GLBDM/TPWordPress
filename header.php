<!DOCTYPE html>

<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php the_title(); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
            <a class="title" href="<?php bloginfo('url') ; ?>">Canada <span>~</span></a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <div id="myLinks">
                <?php
                wp_nav_menu( array(
                        'menu' => 'Menu principal',
                        'container' => 'nav'
                    ));
                ?>
            </div>
        </div>
    </header>