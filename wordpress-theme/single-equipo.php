
<?php
/**
 * The template for displaying single team member posts
 */

get_header();
?>

<main>
    <section class="section section-white">
        <div class="container">
            <?php
            while (have_posts()):
                the_post();
                
                $position = get_post_meta(get_the_ID(), '_team_position', true);
                $experience = get_post_meta(get_the_ID(), '_team_experience', true);
                $education = get_post_meta(get_the_ID(), '_team_education', true);
                $specialties = get_post_meta(get_the_ID(), '_team_specialties', true);
                $specialties_array = $specialties ? explode(',', $specialties) : array();
                ?>
                <div class="mb-6">
                    <a href="<?php echo home_url(); ?>#equipo" class="text-gray-600 hover:text-teal-600" style="display: flex; align-items: center; font-size: 0.875rem; text-decoration: none;">
                        <i class="fas fa-arrow-left" style="margin-right: 0.5rem;"></i>
                        Volver al Equipo
                    </a>
                </div>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div style="display: grid; grid-template-columns: 1fr; gap: 2rem;">
                        <div>
                            <div style="display: flex; flex-direction: column; gap: 2rem;">
                                <?php if (has_post_thumbnail()): ?>
                                <div style="max-width: 20rem;">
                                    <?php the_post_thumbnail('full', array('class' => 'rounded-xl')); ?>
                                </div>
                                <?php endif; ?>

                                <div>
                                    <h1 style="font-size: 2.5rem; font-weight: bold; color: #1f2937; margin-bottom: 0.5rem;"><?php the_title(); ?></h1>
                                    <?php if ($position): ?>
                                    <p style="color: #14b8a6; font-weight: 500; font-size: 1.25rem; margin-bottom: 1.5rem;"><?php echo esc_html($position); ?></p>
                                    <?php endif; ?>

                                    <div style="display: flex; flex-wrap: wrap; gap: 2rem; margin-bottom: 2rem;">
                                        <?php if ($experience): ?>
                                        <div style="display: flex; align-items: center;">
                                            <i class="fas fa-award" style="margin-right: 0.75rem; color: #14b8a6; font-size: 1.25rem;"></i>
                                            <div>
                                                <p style="font-weight: 600; color: #1f2937;">Experiencia</p>
                                                <p style="color: #6b7280;"><?php echo esc_html($experience); ?></p>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        
                                        <?php if ($education): ?>
                                        <div style="display: flex; align-items: center;">
                                            <i class="fas fa-graduation-cap" style="margin-right: 0.75rem; color: #3b82f6; font-size: 1.25rem;"></i>
                                            <div>
                                                <p style="font-weight: 600; color: #1f2937;">Formación</p>
                                                <p style="color: #6b7280;"><?php echo esc_html($education); ?></p>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>

                                    <?php if (!empty($specialties_array)): ?>
                                    <div style="margin-bottom: 2rem;">
                                        <h3 style="font-weight: 600; color: #1f2937; margin-bottom: 1rem;">Especialidades</h3>
                                        <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                                            <?php foreach ($specialties_array as $specialty): ?>
                                                <span style="background: #f0fdfa; color: #0f766e; padding: 0.375rem 0.75rem; border-radius: 0.375rem; font-size: 0.875rem;"><?php echo esc_html(trim($specialty)); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    
                                    <div class="entry-content" style="color: #4b5563; font-size: 1.125rem; line-height: 1.7;">
                                        <h3 style="font-weight: 600; color: #1f2937; margin-bottom: 1rem;">Biografía</h3>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card">
                                <div class="card-content">
                                    <h3 style="font-size: 1.5rem; font-weight: 600; color: #1f2937; margin-bottom: 1.5rem;">Solicitar Cita</h3>
                                    <p style="color: #6b7280; margin-bottom: 2rem;">
                                        Si deseas concertar una cita o consulta con <?php echo get_the_title(); ?>, 
                                        puedes contactar con nosotros a través del siguiente formulario o llamando directamente.
                                    </p>
                                    <div style="margin-bottom: 1.5rem;">
                                        <a href="<?php echo home_url(); ?>#contacto" class="btn" style="width: 100%; text-align: center; margin-bottom: 0.75rem;">
                                            Solicitar Cita
                                        </a>
                                        <a href="tel:<?php echo esc_attr(str_replace(' ', '', crea_get_option('crea_phone', '+34123456789'))); ?>" class="btn btn-outline" style="width: 100%; text-align: center;">
                                            <i class="fas fa-phone" style="margin-right: 0.5rem;"></i>
                                            Llamar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid #e5e7eb;">
                        <h3 style="font-size: 1.5rem; font-weight: 600; color: #1f2937; margin-bottom: 1.5rem;">Otros miembros del equipo</h3>
                        
                        <div class="cards-grid team-grid">
                            <?php
                            $related_team = new WP_Query(array(
                                'post_type' => 'equipo',
                                'posts_per_page' => 3,
                                'post__not_in' => array(get_the_ID()),
                                'orderby' => 'rand'
                            ));
                            
                            if ($related_team->have_posts()):
                                while ($related_team->have_posts()):
                                    $related_team->the_post();
                                    
                                    $related_position = get_post_meta(get_the_ID(), '_team_position', true);
                                    $related_specialties = get_post_meta(get_the_ID(), '_team_specialties', true);
                                    $related_specialties_array = $related_specialties ? explode(',', $related_specialties) : array();
                                    ?>
                                    <div class="card">
                                        <div style="position: relative; overflow: hidden;">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('medium', array('class' => 'team-image')); ?>
                                            <?php else: ?>
                                                <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=400&fit=crop&crop=face" alt="<?php the_title(); ?>" class="team-image">
                                            <?php endif; ?>
                                        </div>
                                        <div class="card-content">
                                            <div style="margin-bottom: 1rem;">
                                                <h3 class="card-title"><?php the_title(); ?></h3>
                                                <?php if ($related_position): ?>
                                                <p style="color: #14b8a6; font-weight: 500; margin-bottom: 0.75rem;"><?php echo esc_html($related_position); ?></p>
                                                <?php endif; ?>
                                            </div>

                                            <?php if (!empty($related_specialties_array)): ?>
                                            <div style="margin-bottom: 1.5rem;">
                                                <div class="specialties">
                                                    <?php foreach (array_slice($related_specialties_array, 0, 3) as $specialty): ?>
                                                        <span class="specialty-badge"><?php echo esc_html(trim($specialty)); ?></span>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="width: 100%; display: block; text-align: center;">
                                                Ver Perfil
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>
                </article>
                <?php
            endwhile;
            ?>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="section section-gray">
        <div class="container">
            <div class="text-center" style="background: white; border-radius: 1.5rem; padding: 3rem; box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);">
                <h3 style="font-size: 1.875rem; font-weight: bold; color: #1f2937; margin-bottom: 1rem;">¿Buscas ayuda profesional?</h3>
                <p style="font-size: 1.125rem; color: #6b7280; margin-bottom: 2rem; max-width: 36rem; margin-left: auto; margin-right: auto;">
                    Nuestro equipo de especialistas está listo para atenderte y ofrecerte el mejor tratamiento personalizado.
                </p>
                <div style="display: flex; flex-direction: column; gap: 1rem; justify-content: center; max-width: 28rem; margin: 0 auto;">
                    <a href="<?php echo home_url(); ?>#contacto" class="btn">
                        Solicitar Consulta
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
