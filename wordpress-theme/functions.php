
<?php
/**
 * CREA Centro de Terapia Theme Functions
 */

// Evitar acceso directo
if (!defined('ABSPATH')) {
    exit;
}

// Configuración del tema
function crea_theme_setup() {
    // Soporte para título del sitio
    add_theme_support('title-tag');
    
    // Soporte para imágenes destacadas
    add_theme_support('post-thumbnails');
    
    // Soporte para logotipo personalizado
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 60,
        'flex-width'  => true,
        'flex-height' => true,
    ));
    
    // Soporte para menús
    register_nav_menus(array(
        'primary' => __('Menú Principal', 'crea-tema'),
        'footer'  => __('Menú Footer', 'crea-tema'),
    ));
    
    // Soporte para HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'crea_theme_setup');

// Enqueue de estilos y scripts
function crea_theme_scripts() {
    // CSS principal
    wp_enqueue_style('crea-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // JavaScript principal
    wp_enqueue_script('crea-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
    
    // Font Awesome para iconos
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0');
}
add_action('wp_enqueue_scripts', 'crea_theme_scripts');

// Registro de áreas de widgets
function crea_theme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Principal', 'crea-tema'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets para la sidebar principal', 'crea-tema'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 1', 'crea-tema'),
        'id'            => 'footer-1',
        'description'   => __('Primera columna del footer', 'crea-tema'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 2', 'crea-tema'),
        'id'            => 'footer-2',
        'description'   => __('Segunda columna del footer', 'crea-tema'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 3', 'crea-tema'),
        'id'            => 'footer-3',
        'description'   => __('Tercera columna del footer', 'crea-tema'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 4', 'crea-tema'),
        'id'            => 'footer-4',
        'description'   => __('Cuarta columna del footer', 'crea-tema'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'crea_theme_widgets_init');

// Customizer
function crea_theme_customize_register($wp_customize) {
    // Sección de configuración general
    $wp_customize->add_section('crea_general', array(
        'title'    => __('Configuración CREA', 'crea-tema'),
        'priority' => 30,
    ));
    
    // Teléfono de contacto
    $wp_customize->add_setting('crea_phone', array(
        'default'           => '+34 123 456 789',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('crea_phone', array(
        'label'   => __('Teléfono de Contacto', 'crea-tema'),
        'section' => 'crea_general',
        'type'    => 'text',
    ));
    
    // Email de contacto
    $wp_customize->add_setting('crea_email', array(
        'default'           => 'info@createrapia.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('crea_email', array(
        'label'   => __('Email de Contacto', 'crea-tema'),
        'section' => 'crea_general',
        'type'    => 'email',
    ));
    
    // Dirección
    $wp_customize->add_setting('crea_address', array(
        'default'           => 'Calle de la Salud, 123, Madrid, España 28001',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('crea_address', array(
        'label'   => __('Dirección', 'crea-tema'),
        'section' => 'crea_general',
        'type'    => 'textarea',
    ));
    
    // Horarios
    $wp_customize->add_setting('crea_hours', array(
        'default'           => 'Lunes - Viernes: 9:00 - 20:00',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('crea_hours', array(
        'label'   => __('Horarios de Atención', 'crea-tema'),
        'section' => 'crea_general',
        'type'    => 'textarea',
    ));
}
add_action('customize_register', 'crea_theme_customize_register');

// Función para obtener configuración del customizer
function crea_get_option($option_name, $default = '') {
    return get_theme_mod($option_name, $default);
}

// Custom Post Type para Servicios
function crea_create_services_post_type() {
    register_post_type('servicios',
        array(
            'labels' => array(
                'name' => __('Servicios', 'crea-tema'),
                'singular_name' => __('Servicio', 'crea-tema'),
                'add_new' => __('Añadir Nuevo', 'crea-tema'),
                'add_new_item' => __('Añadir Nuevo Servicio', 'crea-tema'),
                'edit_item' => __('Editar Servicio', 'crea-tema'),
                'new_item' => __('Nuevo Servicio', 'crea-tema'),
                'view_item' => __('Ver Servicio', 'crea-tema'),
                'search_items' => __('Buscar Servicios', 'crea-tema'),
                'not_found' => __('No se encontraron servicios', 'crea-tema'),
                'not_found_in_trash' => __('No se encontraron servicios en la papelera', 'crea-tema')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            'menu_icon' => 'dashicons-heart',
            'rewrite' => array('slug' => 'servicios'),
        )
    );
}
add_action('init', 'crea_create_services_post_type');

// Custom Post Type para Equipo
function crea_create_team_post_type() {
    register_post_type('equipo',
        array(
            'labels' => array(
                'name' => __('Equipo', 'crea-tema'),
                'singular_name' => __('Miembro del Equipo', 'crea-tema'),
                'add_new' => __('Añadir Nuevo', 'crea-tema'),
                'add_new_item' => __('Añadir Nuevo Miembro', 'crea-tema'),
                'edit_item' => __('Editar Miembro', 'crea-tema'),
                'new_item' => __('Nuevo Miembro', 'crea-tema'),
                'view_item' => __('Ver Miembro', 'crea-tema'),
                'search_items' => __('Buscar Miembros', 'crea-tema'),
                'not_found' => __('No se encontraron miembros', 'crea-tema'),
                'not_found_in_trash' => __('No se encontraron miembros en la papelera', 'crea-tema')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-groups',
            'rewrite' => array('slug' => 'equipo'),
        )
    );
}
add_action('init', 'crea_create_team_post_type');

// Meta boxes para el equipo
function crea_add_team_meta_boxes() {
    add_meta_box(
        'team_details',
        __('Detalles del Miembro', 'crea-tema'),
        'crea_team_meta_box_callback',
        'equipo',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'crea_add_team_meta_boxes');

function crea_team_meta_box_callback($post) {
    wp_nonce_field('crea_save_team_meta', 'crea_team_meta_nonce');
    
    $position = get_post_meta($post->ID, '_team_position', true);
    $experience = get_post_meta($post->ID, '_team_experience', true);
    $education = get_post_meta($post->ID, '_team_education', true);
    $specialties = get_post_meta($post->ID, '_team_specialties', true);
    
    echo '<table class="form-table">';
    echo '<tr><td><label for="team_position">' . __('Cargo:', 'crea-tema') . '</label></td>';
    echo '<td><input type="text" id="team_position" name="team_position" value="' . esc_attr($position) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><td><label for="team_experience">' . __('Experiencia:', 'crea-tema') . '</label></td>';
    echo '<td><input type="text" id="team_experience" name="team_experience" value="' . esc_attr($experience) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><td><label for="team_education">' . __('Formación:', 'crea-tema') . '</label></td>';
    echo '<td><input type="text" id="team_education" name="team_education" value="' . esc_attr($education) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><td><label for="team_specialties">' . __('Especialidades (separadas por comas):', 'crea-tema') . '</label></td>';
    echo '<td><textarea id="team_specialties" name="team_specialties" rows="3" style="width: 100%;">' . esc_textarea($specialties) . '</textarea></td></tr>';
    echo '</table>';
}

function crea_save_team_meta($post_id) {
    if (!isset($_POST['crea_team_meta_nonce']) || !wp_verify_nonce($_POST['crea_team_meta_nonce'], 'crea_save_team_meta')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['team_position'])) {
        update_post_meta($post_id, '_team_position', sanitize_text_field($_POST['team_position']));
    }
    
    if (isset($_POST['team_experience'])) {
        update_post_meta($post_id, '_team_experience', sanitize_text_field($_POST['team_experience']));
    }
    
    if (isset($_POST['team_education'])) {
        update_post_meta($post_id, '_team_education', sanitize_text_field($_POST['team_education']));
    }
    
    if (isset($_POST['team_specialties'])) {
        update_post_meta($post_id, '_team_specialties', sanitize_textarea_field($_POST['team_specialties']));
    }
}
add_action('save_post', 'crea_save_team_meta');

// Funciones helper para la plantilla
function crea_display_hero_stats() {
    $stats = array(
        array(
            'number' => '500+',
            'label' => 'Pacientes Atendidos',
            'icon' => 'fas fa-users',
            'color' => 'teal'
        ),
        array(
            'number' => '15+',
            'label' => 'Años de Experiencia',
            'icon' => 'fas fa-award',
            'color' => 'blue'
        ),
        array(
            'number' => '98%',
            'label' => 'Satisfacción',
            'icon' => 'fas fa-heart',
            'color' => 'green'
        )
    );
    
    echo '<div class="stats">';
    foreach ($stats as $stat) {
        echo '<div class="stat-item">';
        echo '<div class="stat-icon ' . $stat['color'] . '">';
        echo '<i class="' . $stat['icon'] . '"></i>';
        echo '</div>';
        echo '<div>';
        echo '<div class="stat-number">' . $stat['number'] . '</div>';
        echo '<div class="stat-label">' . $stat['label'] . '</div>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
}
?>
