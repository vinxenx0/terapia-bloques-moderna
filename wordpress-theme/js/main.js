
/**
 * CREA Theme Main JavaScript
 */

// Mobile Menu Toggle
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    
    if (mobileMenu && menuIcon) {
        mobileMenu.classList.toggle('active');
        
        if (mobileMenu.classList.contains('active')) {
            menuIcon.classList.remove('fa-bars');
            menuIcon.classList.add('fa-times');
        } else {
            menuIcon.classList.remove('fa-times');
            menuIcon.classList.add('fa-bars');
        }
    }
}

// Smooth Scrolling for Anchor Links
document.addEventListener('DOMContentLoaded', function() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    for (const link of anchorLinks) {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            
            // Skip if it's just "#" or not a proper anchor
            if (targetId === '#' || targetId.length <= 1) return;
            
            const target = document.querySelector(targetId);
            
            if (target) {
                e.preventDefault();
                
                // Close mobile menu if it's open
                const mobileMenu = document.getElementById('mobile-menu');
                if (mobileMenu && mobileMenu.classList.contains('active')) {
                    toggleMobileMenu();
                }
                
                window.scrollTo({
                    top: target.offsetTop - 80, // Offset for sticky header
                    behavior: 'smooth'
                });
            }
        });
    }
});

// Form Validation (Simple)
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.querySelector('.form-grid');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            let valid = true;
            const name = document.getElementById('name');
            const phone = document.getElementById('phone');
            const email = document.getElementById('email');
            const privacy = document.getElementById('privacy');
            
            if (name && !name.value.trim()) {
                valid = false;
                markInvalid(name);
            }
            
            if (phone && !phone.value.trim()) {
                valid = false;
                markInvalid(phone);
            }
            
            if (email && (!email.value.trim() || !isValidEmail(email.value))) {
                valid = false;
                markInvalid(email);
            }
            
            if (privacy && !privacy.checked) {
                valid = false;
                alert('Debes aceptar la política de privacidad');
            }
            
            if (valid) {
                alert('Formulario enviado correctamente. Te contactaremos pronto.');
                contactForm.reset();
            } else {
                alert('Por favor, completa todos los campos obligatorios correctamente.');
            }
        });
    }
    
    function markInvalid(field) {
        field.style.borderColor = '#ef4444';
        
        field.addEventListener('input', function() {
            this.style.borderColor = '';
        }, { once: true });
    }
    
    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});

// Sticky Header Effect
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.header');
    
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }
});
