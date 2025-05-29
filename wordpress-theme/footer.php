
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand Section -->
            <div class="footer-section">
                <div class="logo" style="margin-bottom: 1.5rem;">
                    <div class="logo-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="logo-text">
                        <h3 style="color: white; margin-bottom: 0;"><?php bloginfo('name'); ?></h3>
                        <p style="color: #9ca3af; margin-bottom: 0;"><?php bloginfo('description'); ?></p>
                    </div>
                </div>
                <p style="color: #9ca3af; margin-bottom: 1.5rem;">
                    Centro especializado en logopedia y terapia del habla. Cuidamos tu comunicación 
                    con profesionalidad, cercanía y los mejores tratamientos personalizados.
                </p>
                <div style="display: flex; gap: 1rem;">
                    <a href="#" style="width: 2.5rem; height: 2.5rem; background: #374151; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #9ca3af; text-decoration: none; transition: background-color 0.3s;">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" style="width: 2.5rem; height: 2.5rem; background: #374151; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #9ca3af; text-decoration: none; transition: background-color 0.3s;">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" style="width: 2.5rem; height: 2.5rem; background: #374151; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #9ca3af; text-decoration: none; transition: background-color 0.3s;">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-section">
                <h4>Enlaces Rápidos</h4>
                <?php
                if (is_active_sidebar('footer-1')) {
                    dynamic_sidebar('footer-1');
                } else {
                    echo '<ul class="footer-links">';
                    echo '<li><a href="#inicio">Inicio</a></li>';
                    echo '<li><a href="#nosotros">Nosotros</a></li>';
                    echo '<li><a href="#servicios">Servicios</a></li>';
                    echo '<li><a href="#equipo">Equipo</a></li>';
                    echo '<li><a href="#contacto">Contacto</a></li>';
                    echo '</ul>';
                }
                ?>
            </div>

            <!-- Services -->
            <div class="footer-section">
                <h4>Servicios</h4>
                <?php
                if (is_active_sidebar('footer-2')) {
                    dynamic_sidebar('footer-2');
                } else {
                    echo '<ul class="footer-links">';
                    echo '<li><a href="#servicios">Trastornos del Lenguaje</a></li>';
                    echo '<li><a href="#servicios">Logopedia Infantil</a></li>';
                    echo '<li><a href="#servicios">Neurología del Habla</a></li>';
                    echo '<li><a href="#servicios">Trastornos de la Voz</a></li>';
                    echo '<li><a href="#servicios">Terapia Familiar</a></li>';
                    echo '<li><a href="#servicios">Dificultades de Aprendizaje</a></li>';
                    echo '</ul>';
                }
                ?>
            </div>

            <!-- Contact Info -->
            <div class="footer-section">
                <h4>Contacto</h4>
                <?php
                if (is_active_sidebar('footer-3')) {
                    dynamic_sidebar('footer-3');
                } else {
                    ?>
                    <div style="margin-bottom: 1rem;">
                        <div style="display: flex; gap: 0.75rem; align-items: flex-start; margin-bottom: 0.5rem;">
                            <i class="fas fa-map-marker-alt" style="color: #14b8a6; margin-top: 0.25rem;"></i>
                            <div>
                                <?php echo nl2br(esc_html(crea_get_option('crea_address', 'Calle de la Salud, 123, Madrid, España 28001'))); ?>
                            </div>
                        </div>
                        <div style="display: flex; gap: 0.75rem; align-items: center; margin-bottom: 0.5rem;">
                            <i class="fas fa-phone" style="color: #14b8a6;"></i>
                            <div><?php echo esc_html(crea_get_option('crea_phone', '+34 123 456 789')); ?></div>
                        </div>
                        <div style="display: flex; gap: 0.75rem; align-items: center; margin-bottom: 0.5rem;">
                            <i class="fas fa-envelope" style="color: #14b8a6;"></i>
                            <div><?php echo esc_html(crea_get_option('crea_email', 'info@createrapia.com')); ?></div>
                        </div>
                    </div>
                    
                    <div style="padding: 1rem; background-color: #1f2937; border-radius: 0.5rem;">
                        <h5 style="font-weight: 600; margin-bottom: 0.5rem; color: #14b8a6;">Horarios de Atención</h5>
                        <div style="font-size: 0.875rem; color: #9ca3af;">
                            <?php echo nl2br(esc_html(crea_get_option('crea_hours', "Lunes - Viernes: 9:00 - 20:00\nSábados: 9:00 - 14:00\nDomingos: Cerrado"))); ?>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="footer-bottom">
            <div style="color: #9ca3af; font-size: 0.875rem;">
                © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos los derechos reservados.
            </div>
            <?php
            if (is_active_sidebar('footer-4')) {
                dynamic_sidebar('footer-4');
            } else {
                echo '<div style="display: flex; flex-wrap: wrap; gap: 1.5rem;">';
                echo '<a href="#" style="color: #9ca3af; font-size: 0.875rem; text-decoration: none;">Política de Privacidad</a>';
                echo '<a href="#" style="color: #9ca3af; font-size: 0.875rem; text-decoration: none;">Términos y Condiciones</a>';
                echo '<a href="#" style="color: #9ca3af; font-size: 0.875rem; text-decoration: none;">Aviso Legal</a>';
                echo '<a href="#" style="color: #9ca3af; font-size: 0.875rem; text-decoration: none;">Política de Cookies</a>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    
    mobileMenu.classList.toggle('active');
    
    if (mobileMenu.classList.contains('active')) {
        menuIcon.classList.remove('fa-bars');
        menuIcon.classList.add('fa-times');
    } else {
        menuIcon.classList.remove('fa-times');
        menuIcon.classList.add('fa-bars');
    }
}
</script>
</body>
</html>
