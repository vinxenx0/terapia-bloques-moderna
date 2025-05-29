
<?php
/**
 * The template for displaying single service posts
 */

get_header();
?>

<main>
    <section class="section section-white">
        <div class="container">
            <?php
            while (have_posts()):
                the_post();
                ?>
                <div class="mb-6">
                    <a href="<?php echo home_url(); ?>#servicios" class="text-gray-600 hover:text-teal-600" style="display: flex; align-items: center; font-size: 0.875rem; text-decoration: none;">
                        <i class="fas fa-arrow-left" style="margin-right: 0.5rem;"></i>
                        Volver a Servicios
                    </a>
                </div>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div style="display: grid; grid-template-columns: 1fr; gap: 2rem;">
                        <div>
                            <?php if (has_post_thumbnail()): ?>
                                <div style="margin-bottom: 2rem;">
                                    <?php the_post_thumbnail('full', array('class' => 'rounded-2xl')); ?>
                                </div>
                            <?php endif; ?>

                            <h1 style="font-size: 2.5rem; font-weight: bold; color: #1f2937; margin-bottom: 1.5rem;"><?php the_title(); ?></h1>
                            
                            <div class="entry-content" style="color: #4b5563; font-size: 1.125rem; line-height: 1.7;">
                                <?php the_content(); ?>
                            </div>
                        </div>

                        <div>
                            <div class="card">
                                <div class="card-content">
                                    <h3 style="font-size: 1.5rem; font-weight: 600; color: #1f2937; margin-bottom: 1.5rem;">¿En qué podemos ayudarte?</h3>
                                    
                                    <?php
                                    $features = get_post_meta(get_the_ID(), '_service_features', true);
                                    $features_array = $features ? explode(',', $features) : array();
                                    
                                    if (!empty($features_array)):
                                    ?>
                                    <div class="feature-list" style="margin-bottom: 1.5rem;">
                                        <?php foreach ($features_array as $feature): ?>
                                        <div class="feature-item">
                                            <div class="feature-dot"></div>
                                            <?php echo esc_html(trim($feature)); ?>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php endif; ?>
                                    
                                    <div style="padding-top: 1.5rem; border-top: 1px solid #e5e7eb;">
                                        <h4 style="font-weight: 600; color: #1f2937; margin-bottom: 1rem;">Contacta con nuestros especialistas</h4>
                                        <a href="<?php echo home_url(); ?>#contacto" class="btn" style="width: 100%; text-align: center;">
                                            Solicitar Información
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid #e5e7eb;">
                        <h3 style="font-size: 1.5rem; font-weight: 600; color: #1f2937; margin-bottom: 1.5rem;">Otros servicios</h3>
                        
                        <div class="cards-grid">
                            <?php
                            $related_services = new WP_Query(array(
                                'post_type' => 'servicios',
                                'posts_per_page' => 3,
                                'post__not_in' => array(get_the_ID()),
                                'orderby' => 'rand'
                            ));
                            
                            if ($related_services->have_posts()):
                                while ($related_services->have_posts()):
                                    $related_services->the_post();
                                    ?>
                                    <div class="card">
                                        <div class="card-header" style="background-color: #f0fdfa;">
                                            <div class="card-icon" style="background: linear-gradient(to bottom right, #14b8a6, #3b82f6);">
                                                <i class="fas fa-comment-medical" style="color: white; font-size: 1.5rem;"></i>
                                            </div>
                                            <h3 class="card-title"><?php the_title(); ?></h3>
                                            <div class="card-description"><?php the_excerpt(); ?></div>
                                        </div>
                                        <div class="card-content">
                                            <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="width: 100%; display: block; text-align: center;">
                                                Más información
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
                <h3 style="font-size: 1.875rem; font-weight: bold; color: #1f2937; margin-bottom: 1rem;">¿Necesitas más información o una cita?</h3>
                <p style="font-size: 1.125rem; color: #6b7280; margin-bottom: 2rem; max-width: 36rem; margin-left: auto; margin-right: auto;">
                    Nuestro equipo está preparado para resolver todas tus dudas y ofrecerte el mejor tratamiento personalizado.
                </p>
                <div style="display: flex; flex-direction: column; gap: 1rem; justify-content: center; max-width: 28rem; margin: 0 auto;">
                    <a href="<?php echo home_url(); ?>#contacto" class="btn">
                        Contactar ahora
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
