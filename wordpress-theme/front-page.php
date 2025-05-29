
<?php
/**
 * The front page template file
 */

get_header();
?>

<!-- Hero Section -->
<section id="inicio" class="hero">
    <div class="container">
        <div class="hero-grid">
            <!-- Content -->
            <div class="hero-content">
                <div>
                    <span class="badge">Centro Especializado en Logopedia</span>
                    <h1 class="hero-title">
                        Cuidamos tu <span class="gradient-text">comunicación</span>
                    </h1>
                    <p class="hero-description">
                        Somos un equipo de profesionales especializados en logopedia y terapia del habla, 
                        comprometidos con mejorar la calidad de vida de nuestros pacientes a través de 
                        tratamientos personalizados y efectivos.
                    </p>
                </div>

                <div class="hero-buttons">
                    <a href="#contacto" class="btn">
                        Solicitar Cita
                        <i class="fas fa-arrow-right" style="margin-left: 0.5rem;"></i>
                    </a>
                    <a href="#servicios" class="btn btn-outline">
                        Conoce Nuestros Servicios
                    </a>
                </div>

                <!-- Stats -->
                <?php crea_display_hero_stats(); ?>
            </div>

            <!-- Image -->
            <div class="hero-image">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/hero.jpg"
                    alt="Terapia logopedia"
                    onerror="this.src='https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?w=600&h=400&fit=crop&crop=center'; this.onerror='';"
                />
                <div style="position: absolute; top: -1.5rem; left: -1.5rem; width: 18rem; height: 18rem; background: linear-gradient(to bottom right, rgba(20, 184, 166, 0.2), rgba(59, 130, 246, 0.2)); border-radius: 50%; filter: blur(3rem); z-index: -1;"></div>
                <div style="position: absolute; bottom: -1.5rem; right: -1.5rem; width: 18rem; height: 18rem; background: linear-gradient(to bottom right, rgba(59, 130, 246, 0.2), rgba(168, 85, 247, 0.2)); border-radius: 50%; filter: blur(3rem); z-index: -1;"></div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="nosotros" class="section section-white">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">
                ¿Por qué elegir <span class="gradient-text">nuestro centro?</span>
            </h2>
            <p class="section-description">
                En CREA, combinamos experiencia profesional, metodologías innovadoras y un enfoque 
                humano para ofrecer la mejor atención en logopedia y terapia del habla.
            </p>
        </div>

        <div class="cards-grid">
            <div class="card">
                <div class="card-content text-center">
                    <div class="card-icon" style="background: linear-gradient(to bottom right, #14b8a6, #3b82f6); margin: 0 auto;">
                        <i class="fas fa-heart" style="color: white; font-size: 1.5rem;"></i>
                    </div>
                    <h3 class="card-title">Cuidado Personalizado</h3>
                    <p class="card-description">Cada paciente recibe un plan de tratamiento único adaptado a sus necesidades específicas.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-content text-center">
                    <div class="card-icon" style="background: linear-gradient(to bottom right, #14b8a6, #3b82f6); margin: 0 auto;">
                        <i class="fas fa-users" style="color: white; font-size: 1.5rem;"></i>
                    </div>
                    <h3 class="card-title">Equipo Especializado</h3>
                    <p class="card-description">Profesionales altamente cualificados con formación continua en las últimas técnicas terapéuticas.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-content text-center">
                    <div class="card-icon" style="background: linear-gradient(to bottom right, #14b8a6, #3b82f6); margin: 0 auto;">
                        <i class="fas fa-book-open" style="color: white; font-size: 1.5rem;"></i>
                    </div>
                    <h3 class="card-title">Metodología Avanzada</h3>
                    <p class="card-description">Utilizamos las técnicas más innovadoras y basadas en evidencia científica.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-content text-center">
                    <div class="card-icon" style="background: linear-gradient(to bottom right, #14b8a6, #3b82f6); margin: 0 auto;">
                        <i class="fas fa-award" style="color: white; font-size: 1.5rem;"></i>
                    </div>
                    <h3 class="card-title">Excelencia Profesional</h3>
                    <p class="card-description">Comprometidos con los más altos estándares de calidad en nuestros servicios.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-content text-center">
                    <div class="card-icon" style="background: linear-gradient(to bottom right, #14b8a6, #3b82f6); margin: 0 auto;">
                        <i class="fas fa-bullseye" style="color: white; font-size: 1.5rem;"></i>
                    </div>
                    <h3 class="card-title">Objetivos Claros</h3>
                    <p class="card-description">Establecemos metas realistas y medibles para cada proceso terapéutico.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-content text-center">
                    <div class="card-icon" style="background: linear-gradient(to bottom right, #14b8a6, #3b82f6); margin: 0 auto;">
                        <i class="fas fa-shield-alt" style="color: white; font-size: 1.5rem;"></i>
                    </div>
                    <h3 class="card-title">Confianza Total</h3>
                    <p class="card-description">Un entorno seguro y confidencial donde cada paciente se siente cómodo y protegido.</p>
                </div>
            </div>
        </div>

        <!-- Mission Statement -->
        <div class="gradient-bg text-center">
            <h3 class="text-xl font-bold text-gray-800 mb-6" style="font-size: 1.875rem; font-weight: bold; color: #1f2937; margin-bottom: 1.5rem;">Nuestra Misión</h3>
            <p style="font-size: 1.125rem; color: #374151; max-width: 48rem; margin: 0 auto; line-height: 1.6;">
                Mejorar la calidad de vida de nuestros pacientes a través de tratamientos especializados 
                en logopedia, proporcionando un espacio seguro donde cada persona pueda desarrollar al máximo 
                sus habilidades comunicativas. Creemos en el poder transformador de la comunicación efectiva 
                y trabajamos día a día para hacer realidad el potencial de cada uno de nuestros pacientes.
            </p>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="servicios" class="section section-gray">
    <div class="container">
        <div class="section-header">
            <span class="badge">Nuestros Servicios</span>
            <h2 class="section-title">
                Servicios <span class="gradient-text">especializados</span>
            </h2>
            <p class="section-description">
                Ofrecemos una amplia gama de servicios de logopedia adaptados a las necesidades 
                específicas de cada paciente, desde la infancia hasta la edad adulta.
            </p>
        </div>

        <div class="cards-grid">
            <?php
            $services_args = array(
                'post_type' => 'servicios',
                'posts_per_page' => 6,
            );
            
            $services_query = new WP_Query($services_args);
            
            if ($services_query->have_posts()):
                while ($services_query->have_posts()):
                    $services_query->the_post();
                    
                    $features = get_post_meta(get_the_ID(), '_service_features', true);
                    $features_array = $features ? explode(',', $features) : array();
                    $service_color = get_post_meta(get_the_ID(), '_service_color', true) ?: 'from-teal-500 to-blue-500';
                    $service_bg = get_post_meta(get_the_ID(), '_service_bg', true) ?: 'bg-teal-50';
                    $service_icon = get_post_meta(get_the_ID(), '_service_icon', true) ?: 'fas fa-comment-medical';
                    ?>
                    <div class="card">
                        <div class="card-header" style="background-color: #f0fdfa;">
                            <div class="card-icon" style="background: linear-gradient(to bottom right, #14b8a6, #3b82f6);">
                                <i class="<?php echo esc_attr($service_icon); ?>" style="color: white; font-size: 1.5rem;"></i>
                            </div>
                            <h3 class="card-title"><?php the_title(); ?></h3>
                            <div class="card-description"><?php the_excerpt(); ?></div>
                        </div>
                        <div class="card-content">
                            <?php if (!empty($features_array)): ?>
                                <div class="feature-list">
                                    <?php foreach ($features_array as $feature): ?>
                                        <div class="feature-item">
                                            <div class="feature-dot"></div>
                                            <?php echo esc_html(trim($feature)); ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="width: 100%; display: block; text-align: center;">
                                Más información
                                <i class="fas fa-arrow-right" style="margin-left: 0.5rem;"></i>
                            </a>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                // Servicios predefinidos si no hay posts
                $default_services = array(
                    array(
                        'title' => 'Trastornos del Lenguaje',
                        'description' => 'Evaluación y tratamiento de dificultades en la comprensión y expresión del lenguaje oral y escrito.',
                        'features' => array('Retrasos del lenguaje', 'Trastornos específicos', 'Afasias', 'Disartrias'),
                        'icon' => 'fas fa-comment-medical'
                    ),
                    array(
                        'title' => 'Logopedia Infantil',
                        'description' => 'Intervención temprana especializada en el desarrollo comunicativo y del habla en niños.',
                        'features' => array('Estimulación temprana', 'Desarrollo fonológico', 'Lectoescritura', 'Comunicación aumentativa'),
                        'icon' => 'fas fa-baby'
                    ),
                    array(
                        'title' => 'Neurología del Habla',
                        'description' => 'Rehabilitación especializada para personas con lesiones neurológicas que afectan la comunicación.',
                        'features' => array('Daño cerebral', 'Ictus', 'Traumatismos', 'Enfermedades degenerativas'),
                        'icon' => 'fas fa-brain'
                    ),
                    array(
                        'title' => 'Trastornos de la Voz',
                        'description' => 'Diagnóstico y tratamiento de problemas vocales en profesionales de la voz y público general.',
                        'features' => array('Disfonías', 'Nódulos vocales', 'Rehabilitación vocal', 'Técnica vocal'),
                        'icon' => 'fas fa-microphone'
                    ),
                    array(
                        'title' => 'Terapia Familiar',
                        'description' => 'Orientación y formación a familias para optimizar el proceso terapéutico en casa.',
                        'features' => array('Pautas familiares', 'Estrategias comunicativas', 'Apoyo emocional', 'Seguimiento'),
                        'icon' => 'fas fa-users'
                    ),
                    array(
                        'title' => 'Dificultades de Aprendizaje',
                        'description' => 'Intervención en trastornos que afectan el rendimiento académico y el aprendizaje.',
                        'features' => array('Dislexia', 'Disgrafía', 'Discalculia', 'TDAH'),
                        'icon' => 'fas fa-book-open'
                    ),
                );
                
                foreach ($default_services as $service):
                    ?>
                    <div class="card">
                        <div class="card-header" style="background-color: #f0fdfa;">
                            <div class="card-icon" style="background: linear-gradient(to bottom right, #14b8a6, #3b82f6);">
                                <i class="<?php echo esc_attr($service['icon']); ?>" style="color: white; font-size: 1.5rem;"></i>
                            </div>
                            <h3 class="card-title"><?php echo esc_html($service['title']); ?></h3>
                            <div class="card-description"><?php echo esc_html($service['description']); ?></div>
                        </div>
                        <div class="card-content">
                            <div class="feature-list">
                                <?php foreach ($service['features'] as $feature): ?>
                                    <div class="feature-item">
                                        <div class="feature-dot"></div>
                                        <?php echo esc_html($feature); ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <a href="#contacto" class="btn btn-outline" style="width: 100%; display: block; text-align: center;">
                                Más información
                                <i class="fas fa-arrow-right" style="margin-left: 0.5rem;"></i>
                            </a>
                        </div>
                    </div>
                    <?php
                endforeach;
            endif;
            ?>
        </div>

        <!-- CTA Section -->
        <div class="text-center" style="background: white; border-radius: 1.5rem; padding: 3rem; box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);">
            <h3 style="font-size: 1.875rem; font-weight: bold; color: #1f2937; margin-bottom: 1rem;">¿Necesitas una evaluación?</h3>
            <p style="font-size: 1.125rem; color: #6b7280; margin-bottom: 2rem; max-width: 36rem; margin-left: auto; margin-right: auto;">
                Nuestro equipo está preparado para realizar una evaluación completa y personalizada. 
                El primer paso hacia la mejora de la comunicación comienza con una consulta.
            </p>
            <div style="display: flex; flex-direction: column; gap: 1rem; justify-content: center; max-width: 28rem; margin: 0 auto;">
                <a href="#contacto" class="btn" style="display: inline-flex; align-items: center; justify-content: center;">
                    <i class="fas fa-calendar" style="margin-right: 0.5rem;"></i>
                    Reservar Evaluación
                </a>
                <a href="#contacto" class="btn btn-outline" style="display: inline-flex; align-items: center; justify-content: center;">
                    Consulta Telefónica
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="equipo" class="section section-white">
    <div class="container">
        <div class="section-header">
            <span class="badge" style="background: #eff6ff; color: #1d4ed8;">Nuestro Equipo</span>
            <h2 class="section-title">
                Profesionales <span class="gradient-text">especializados</span>
            </h2>
            <p class="section-description">
                Contamos con un equipo multidisciplinar de logopedas altamente cualificados, 
                cada uno especializado en diferentes áreas de la terapia del habla y lenguaje.
            </p>
        </div>

        <div class="cards-grid team-grid">
            <?php
            $team_args = array(
                'post_type' => 'equipo',
                'posts_per_page' => 4,
            );
            
            $team_query = new WP_Query($team_args);
            
            if ($team_query->have_posts()):
                while ($team_query->have_posts()):
                    $team_query->the_post();
                    
                    $position = get_post_meta(get_the_ID(), '_team_position', true);
                    $experience = get_post_meta(get_the_ID(), '_team_experience', true);
                    $education = get_post_meta(get_the_ID(), '_team_education', true);
                    $specialties = get_post_meta(get_the_ID(), '_team_specialties', true);
                    $specialties_array = $specialties ? explode(',', $specialties) : array();
                    ?>
                    <div class="card">
                        <div style="position: relative; overflow: hidden;">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('full', array('class' => 'team-image')); ?>
                            <?php else: ?>
                                <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=400&fit=crop&crop=face" alt="<?php the_title(); ?>" class="team-image">
                            <?php endif; ?>
                        </div>
                        <div class="card-content">
                            <div style="margin-bottom: 1rem;">
                                <h3 class="card-title"><?php the_title(); ?></h3>
                                <p style="color: #14b8a6; font-weight: 500; margin-bottom: 0.75rem;"><?php echo esc_html($position); ?></p>
                                <p style="color: #6b7280; font-size: 0.875rem; margin-bottom: 1rem;"><?php the_excerpt(); ?></p>
                            </div>

                            <div style="margin-bottom: 1.5rem;">
                                <?php if ($experience): ?>
                                <div style="display: flex; align-items: center; font-size: 0.875rem; color: #6b7280; margin-bottom: 0.75rem;">
                                    <i class="fas fa-award" style="margin-right: 0.5rem; color: #14b8a6;"></i>
                                    <span><?php echo esc_html($experience); ?> de experiencia</span>
                                </div>
                                <?php endif; ?>
                                
                                <?php if ($education): ?>
                                <div style="display: flex; align-items: center; font-size: 0.875rem; color: #6b7280; margin-bottom: 0.75rem;">
                                    <i class="fas fa-book-open" style="margin-right: 0.5rem; color: #3b82f6;"></i>
                                    <span><?php echo esc_html($education); ?></span>
                                </div>
                                <?php endif; ?>
                            </div>

                            <?php if (!empty($specialties_array)): ?>
                            <div style="margin-bottom: 1.5rem;">
                                <p style="font-size: 0.875rem; font-weight: 500; color: #374151; margin-bottom: 0.5rem;">Especialidades:</p>
                                <div class="specialties">
                                    <?php foreach ($specialties_array as $specialty): ?>
                                        <span class="specialty-badge"><?php echo esc_html(trim($specialty)); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="width: 100%; display: block; text-align: center;">
                                Ver Perfil Completo
                            </a>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                // Equipo predefinido si no hay posts
                $default_team = array(
                    array(
                        'name' => 'Dra. María González',
                        'position' => 'Directora y Logopeda Senior',
                        'image' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=400&fit=crop&crop=face',
                        'description' => 'Especialista en rehabilitación neurológica con amplia experiencia en trastornos del habla y lenguaje.',
                        'experience' => '15+ años',
                        'education' => 'Doctora en Logopedia - Universidad Complutense',
                        'specialties' => array('Neurología del Habla', 'Trastornos del Lenguaje', 'Afasias')
                    ),
                    array(
                        'name' => 'Lic. Ana Martín',
                        'position' => 'Logopeda Infantil',
                        'image' => 'https://images.unsplash.com/photo-1594824388597-9bd99bcf6e60?w=400&h=400&fit=crop&crop=face',
                        'description' => 'Experta en desarrollo infantil y estimulación temprana, con formación especializada en autismo.',
                        'experience' => '8+ años',
                        'education' => 'Grado en Logopedia - Universidad de Valencia',
                        'specialties' => array('Logopedia Infantil', 'Estimulación Temprana', 'Lectoescritura')
                    ),
                    array(
                        'name' => 'Lic. Carmen Ruiz',
                        'position' => 'Especialista en Voz',
                        'image' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400&h=400&fit=crop&crop=face',
                        'description' => 'Especializada en patología vocal y técnica vocal para profesionales de la voz y cantantes.',
                        'experience' => '10+ años',
                        'education' => 'Grado en Logopedia + Máster en Voz',
                        'specialties' => array('Trastornos de la Voz', 'Técnica Vocal', 'Rehabilitación Vocal')
                    ),
                    array(
                        'name' => 'Lic. David López',
                        'position' => 'Logopeda Neurológico',
                        'image' => 'https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=400&h=400&fit=crop&crop=face',
                        'description' => 'Experto en rehabilitación tras daño cerebral y enfermedades neurodegenerativas.',
                        'experience' => '12+ años',
                        'education' => 'Grado en Logopedia + Máster en Neuropsicología',
                        'specialties' => array('Daño Cerebral', 'Ictus', 'Degeneración Neurológica')
                    )
                );
                
                foreach ($default_team as $member):
                    ?>
                    <div class="card">
                        <div style="position: relative; overflow: hidden;">
                            <img src="<?php echo esc_url($member['image']); ?>" alt="<?php echo esc_attr($member['name']); ?>" class="team-image">
                        </div>
                        <div class="card-content">
                            <div style="margin-bottom: 1rem;">
                                <h3 class="card-title"><?php echo esc_html($member['name']); ?></h3>
                                <p style="color: #14b8a6; font-weight: 500; margin-bottom: 0.75rem;"><?php echo esc_html($member['position']); ?></p>
                                <p style="color: #6b7280; font-size: 0.875rem; margin-bottom: 1rem;"><?php echo esc_html($member['description']); ?></p>
                            </div>

                            <div style="margin-bottom: 1.5rem;">
                                <div style="display: flex; align-items: center; font-size: 0.875rem; color: #6b7280; margin-bottom: 0.75rem;">
                                    <i class="fas fa-award" style="margin-right: 0.5rem; color: #14b8a6;"></i>
                                    <span><?php echo esc_html($member['experience']); ?> de experiencia</span>
                                </div>
                                <div style="display: flex; align-items: center; font-size: 0.875rem; color: #6b7280; margin-bottom: 0.75rem;">
                                    <i class="fas fa-book-open" style="margin-right: 0.5rem; color: #3b82f6;"></i>
                                    <span><?php echo esc_html($member['education']); ?></span>
                                </div>
                            </div>

                            <div style="margin-bottom: 1.5rem;">
                                <p style="font-size: 0.875rem; font-weight: 500; color: #374151; margin-bottom: 0.5rem;">Especialidades:</p>
                                <div class="specialties">
                                    <?php foreach ($member['specialties'] as $specialty): ?>
                                        <span class="specialty-badge"><?php echo esc_html($specialty); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <a href="#contacto" class="btn btn-outline" style="width: 100%; display: block; text-align: center;">
                                Ver Perfil Completo
                            </a>
                        </div>
                    </div>
                    <?php
                endforeach;
            endif;
            ?>
        </div>

        <!-- Team Values -->
        <div class="gradient-bg">
            <div class="text-center" style="margin-bottom: 3rem;">
                <h3 style="font-size: 1.875rem; font-weight: bold; color: #1f2937; margin-bottom: 1rem;">Nuestro Compromiso</h3>
                <p style="font-size: 1.125rem; color: #6b7280; max-width: 36rem; margin-left: auto; margin-right: auto;">
                    Todos nuestros profesionales comparten valores fundamentales que guían nuestra práctica diaria.
                </p>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr; gap: 2rem;">
                <div class="text-center">
                    <div class="card-icon" style="background: linear-gradient(to bottom right, #14b8a6, #3b82f6); margin: 0 auto;">
                        <i class="fas fa-heart" style="color: white; font-size: 1.5rem;"></i>
                    </div>
                    <h4 style="font-size: 1.25rem; font-weight: 600; color: #1f2937; margin: 1rem 0 0.5rem;">Atención Personalizada</h4>
                    <p style="color: #6b7280;">Cada paciente recibe un trato individualizado y un plan específico para sus necesidades.</p>
                </div>
                <div class="text-center">
                    <div class="card-icon" style="background: linear-gradient(to bottom right, #3b82f6, #8b5cf6); margin: 0 auto;">
                        <i class="fas fa-book-open" style="color: white; font-size: 1.5rem;"></i>
                    </div>
                    <h4 style="font-size: 1.25rem; font-weight: 600; color: #1f2937; margin: 1rem 0 0.5rem;">Formación Continua</h4>
                    <p style="color: #6b7280;">Nos mantenemos actualizados con las últimas técnicas y avances en logopedia.</p>
                </div>
                <div class="text-center">
                    <div class="card-icon" style="background: linear-gradient(to bottom right, #8b5cf6, #ec4899); margin: 0 auto;">
                        <i class="fas fa-star" style="color: white; font-size: 1.5rem;"></i>
                    </div>
                    <h4 style="font-size: 1.25rem; font-weight: 600; color: #1f2937; margin: 1rem 0 0.5rem;">Excelencia Profesional</h4>
                    <p style="color: #6b7280;">Mantenemos los más altos estándares de calidad en todos nuestros servicios.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contacto" class="section section-gray">
    <div class="container">
        <div class="section-header">
            <span class="badge">Contacto</span>
            <h2 class="section-title">
                ¿Listo para <span class="gradient-text">comenzar?</span>
            </h2>
            <p class="section-description">
                Estamos aquí para ayudarte. Contacta con nosotros para solicitar una cita 
                o resolver cualquier duda sobre nuestros servicios.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr; gap: 2rem; margin-bottom: 3rem;">
            <!-- Contact Information -->
            <div>
                <div style="display: grid; grid-template-columns: 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
                    <div class="card">
                        <div class="card-content">
                            <div style="display: flex; align-items: flex-start; gap: 1rem;">
                                <div style="width: 3rem; height: 3rem; border-radius: 0.75rem; background: linear-gradient(to bottom right, #3b82f6, #06b6d4); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-phone" style="color: white; font-size: 1.25rem;"></i>
                                </div>
                                <div>
                                    <h3 style="font-weight: 600; color: #1f2937; margin-bottom: 0.25rem;">Teléfono</h3>
                                    <p style="font-size: 1.125rem; font-weight: 500; color: #374151; margin-bottom: 0.25rem;">
                                        <?php echo esc_html(crea_get_option('crea_phone', '+34 123 456 789')); ?>
                                    </p>
                                    <p style="font-size: 0.875rem; color: #6b7280;">Llámanos para solicitar cita</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div style="display: flex; align-items: flex-start; gap: 1rem;">
                                <div style="width: 3rem; height: 3rem; border-radius: 0.75rem; background: linear-gradient(to bottom right, #10b981, #059669); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-envelope" style="color: white; font-size: 1.25rem;"></i>
                                </div>
                                <div>
                                    <h3 style="font-weight: 600; color: #1f2937; margin-bottom: 0.25rem;">Email</h3>
                                    <p style="font-size: 1.125rem; font-weight: 500; color: #374151; margin-bottom: 0.25rem;">
                                        <?php echo esc_html(crea_get_option('crea_email', 'info@createrapia.com')); ?>
                                    </p>
                                    <p style="font-size: 0.875rem; color: #6b7280;">Escríbenos tus consultas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div style="display: flex; align-items: flex-start; gap: 1rem;">
                                <div style="width: 3rem; height: 3rem; border-radius: 0.75rem; background: linear-gradient(to bottom right, #8b5cf6, #ec4899); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-map-marker-alt" style="color: white; font-size: 1.25rem;"></i>
                                </div>
                                <div>
                                    <h3 style="font-weight: 600; color: #1f2937; margin-bottom: 0.25rem;">Dirección</h3>
                                    <p style="font-size: 1.125rem; font-weight: 500; color: #374151; margin-bottom: 0.25rem;">
                                        <?php 
                                        $address = explode(',', crea_get_option('crea_address', 'Calle de la Salud, 123, Madrid, España 28001'));
                                        if (isset($address[0])) {
                                            echo esc_html($address[0]);
                                        }
                                        ?>
                                    </p>
                                    <p style="font-size: 0.875rem; color: #6b7280;">
                                        <?php 
                                        if (count($address) > 1) {
                                            echo esc_html(implode(',', array_slice($address, 1)));
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div style="display: flex; align-items: flex-start; gap: 1rem;">
                                <div style="width: 3rem; height: 3rem; border-radius: 0.75rem; background: linear-gradient(to bottom right, #f59e0b, #ef4444); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-clock" style="color: white; font-size: 1.25rem;"></i>
                                </div>
                                <div>
                                    <h3 style="font-weight: 600; color: #1f2937; margin-bottom: 0.25rem;">Horarios</h3>
                                    <p style="font-size: 1.125rem; font-weight: 500; color: #374151; margin-bottom: 0.25rem;">
                                        <?php
                                        $hours = explode("\n", crea_get_option('crea_hours', "Lunes - Viernes: 9:00 - 20:00\nSábados: 9:00 - 14:00\nDomingos: Cerrado"));
                                        if (isset($hours[0])) {
                                            echo esc_html($hours[0]);
                                        }
                                        ?>
                                    </p>
                                    <p style="font-size: 0.875rem; color: #6b7280;">
                                        <?php
                                        if (count($hours) > 1) {
                                            echo esc_html($hours[1]) . '<br>';
                                            if (isset($hours[2])) {
                                                echo esc_html($hours[2]);
                                            }
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="card" style="background: linear-gradient(to bottom right, #f0fdfa, #eff6ff);">
                    <div class="card-header">
                        <h3 style="display: flex; align-items: center; font-size: 1.25rem; font-weight: 600; color: #1f2937;">
                            <i class="fas fa-calendar" style="margin-right: 0.5rem; color: #14b8a6;"></i>
                            Cita Rápida
                        </h3>
                    </div>
                    <div class="card-content">
                        <p style="color: #6b7280; margin-bottom: 1rem;">¿Necesitas una cita urgente?</p>
                        <a href="tel:<?php echo esc_attr(str_replace(' ', '', crea_get_option('crea_phone', '+34123456789'))); ?>" class="btn" style="width: 100%; text-align: center;">
                            <i class="fas fa-phone" style="margin-right: 0.5rem;"></i>
                            Llamar Ahora
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <div class="card">
                    <div class="card-header">
                        <h3 style="font-size: 1.5rem; color: #1f2937; display: flex; align-items: center;">
                            <i class="fas fa-comment-dots" style="margin-right: 0.75rem; color: #14b8a6;"></i>
                            Solicitar Cita o Información
                        </h3>
                    </div>
                    <div class="card-content">
                        <?php
                        if (function_exists('contact_form_7')):
                            echo do_shortcode('[contact-form-7 id="form-contacto" title="Formulario de Contacto"]');
                        else:
                        ?>
                        <form class="form-grid">
                            <div class="form-group">
                                <label for="name" class="form-label">Nombre completo *</label>
                                <input type="text" id="name" class="form-input" placeholder="Tu nombre completo" required>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="form-label">Teléfono *</label>
                                <input type="tel" id="phone" class="form-input" placeholder="Tu número de teléfono" required>
                            </div>

                            <div class="form-group" style="grid-column: 1 / -1;">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" id="email" class="form-input" placeholder="tu@email.com" required>
                            </div>

                            <div class="form-group" style="grid-column: 1 / -1;">
                                <label for="consultation" class="form-label">Tipo de consulta</label>
                                <select id="consultation" class="form-select">
                                    <option value="">Selecciona una opción</option>
                                    <option value="evaluacion">Primera consulta (evaluación)</option>
                                    <option value="infantil">Sesión de logopedia infantil</option>
                                    <option value="neuro">Rehabilitación neurológica</option>
                                    <option value="voz">Terapia de voz</option>
                                    <option value="familia">Consulta familiar</option>
                                    <option value="seguimiento">Seguimiento de tratamiento</option>
                                </select>
                            </div>

                            <div class="form-group" style="grid-column: 1 / -1;">
                                <label for="message" class="form-label">Mensaje</label>
                                <textarea id="message" class="form-textarea" rows="4" placeholder="Cuéntanos cómo podemos ayudarte..."></textarea>
                            </div>

                            <div class="form-group" style="grid-column: 1 / -1; display: flex; align-items: flex-start; gap: 0.75rem;">
                                <input type="checkbox" id="privacy" style="margin-top: 0.25rem;">
                                <label for="privacy" style="font-size: 0.875rem; color: #6b7280;">
                                    Acepto la política de privacidad y el tratamiento de mis datos personales 
                                    para la gestión de mi solicitud.
                                </label>
                            </div>

                            <div style="grid-column: 1 / -1;">
                                <button type="submit" class="btn" style="width: 100%; padding: 0.75rem 0; font-size: 1.125rem;">
                                    Enviar Solicitud
                                </button>
                            </div>
                        </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map placeholder -->
        <div class="card">
            <div style="height: 16rem; background: linear-gradient(to right, #f0fdfa, #eff6ff); display: flex; align-items: center; justify-content: center;">
                <div style="text-align: center;">
                    <i class="fas fa-map-marker-alt" style="font-size: 3rem; color: #14b8a6; margin-bottom: 1rem;"></i>
                    <h3 style="font-size: 1.25rem; font-weight: 600; color: #1f2937; margin-bottom: 0.5rem;">Nuestra Ubicación</h3>
                    <p style="color: #6b7280;">
                        <?php echo esc_html(crea_get_option('crea_address', 'Calle de la Salud, 123 - Madrid')); ?>
                    </p>
                    <p style="color: #6b7280;">Fácil acceso en transporte público</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
