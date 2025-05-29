
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="container">
        <div class="header-content">
            <!-- Logo -->
            <div class="logo">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    ?>
                    <div class="logo-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="logo-text">
                        <h1><?php bloginfo('name'); ?></h1>
                        <p><?php bloginfo('description'); ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>

            <!-- Desktop Navigation -->
            <nav class="nav-desktop">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => '',
                    'container'      => false,
                    'fallback_cb'    => function() {
                        echo '<a href="#inicio">Inicio</a>';
                        echo '<a href="#nosotros">Nosotros</a>';
                        echo '<a href="#servicios">Servicios</a>';
                        echo '<a href="#equipo">Equipo</a>';
                        echo '<a href="#contacto">Contacto</a>';
                    }
                ));
                ?>
            </nav>

            <!-- Contact Info -->
            <div class="contact-info">
                <div class="phone-info">
                    <i class="fas fa-phone" style="color: #14b8a6; margin-right: 0.5rem;"></i>
                    <span><?php echo crea_get_option('crea_phone', '+34 123 456 789'); ?></span>
                </div>
                <a href="#contacto" class="btn">Cita Previa</a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
                <i class="fas fa-bars" id="menu-icon"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobile-menu">
            <nav class="mobile-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => '',
                    'container'      => false,
                    'fallback_cb'    => function() {
                        echo '<a href="#inicio" onclick="toggleMobileMenu()">Inicio</a>';
                        echo '<a href="#nosotros" onclick="toggleMobileMenu()">Nosotros</a>';
                        echo '<a href="#servicios" onclick="toggleMobileMenu()">Servicios</a>';
                        echo '<a href="#equipo" onclick="toggleMobileMenu()">Equipo</a>';
                        echo '<a href="#contacto" onclick="toggleMobileMenu()">Contacto</a>';
                    }
                ));
                ?>
                <a href="#contacto" class="btn" onclick="toggleMobileMenu()">Cita Previa</a>
            </nav>
        </div>
    </div>
</header>
