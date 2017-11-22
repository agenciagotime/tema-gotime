<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

    <!-- Carrega todos scripts para o tema ex: jQuery -->
    <?php wp_head(); ?>

</head>
<body>

    <nav class="navbar fixed-top  navbar-toggleable-md navbar-light">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Logo -->
        <a class="navbar-brand" href="<?php echo site_url() ?>" title="<?php bloginfo('name') ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" width="50" height="50"
                 class="d-inline-block align-top" alt="">
        </a>

        <!-- Menu Header -->
        <?php
        wp_nav_menu([
            'menu' => 'menu-header',
            'theme_location' => 'menu-header',
            'container' => 'div',
            'container_id' => 'bs-example-navbar-collapse-1',
            'container_class' => 'collapse navbar-collapse',
            'menu_id' => false,
            'menu_class' => 'navbar-nav ml-auto',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker()
        ]);
        ?>
    </nav>

<header class="header">
    <div class="container">
        <div class="row apresentacao">
            <div class="col-md texto">
                Somos a Gotime, uma agência digital focada na criação de experiências digitais. Usamos todo o nosso conhecimento para 
                ajudar nossos clientes a construírem suas marcas através da internet.
            </div>
            <div class="col-md imagem">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" width="50" height="50"
                     class="d-inline-block align-top" alt="">
            </div>
        </div>
    </div>
</header>