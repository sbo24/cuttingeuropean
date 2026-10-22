import './bootstrap';
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import intersect from '@alpinejs/intersect';

window.Alpine = Alpine;
Alpine.plugin(collapse);
Alpine.plugin(intersect);

document.addEventListener('DOMContentLoaded', () => {
    // Header shadow on scroll
    const header = document.getElementById('site-header');
    if (header) {
        const onHeaderScroll = () => {
            if (window.scrollY > 20) {
                header.classList.add('shadow-md');
            } else {
                header.classList.remove('shadow-md');
            }
        };
        window.addEventListener('scroll', onHeaderScroll, { passive: true });
        onHeaderScroll();
    }

    // Scroll reveal observer (subtle, non-intrusive)
    const revealElements = document.querySelectorAll('.fade-up, .fade-in');
    if (revealElements.length > 0 && 'IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });

        revealElements.forEach(el => revealObserver.observe(el));
    }

    // Cookie Banner
    const banner = document.getElementById('cookie-banner');
    if (banner) {
        if (!localStorage.getItem('cookies_accepted')) {
            banner.style.display = 'flex';
        } else {
            banner.remove();
        }
        const acceptBtn = document.getElementById('cookie-accept');
        const rejectBtn = document.getElementById('cookie-reject');
        if (acceptBtn) {
            acceptBtn.addEventListener('click', () => {
                localStorage.setItem('cookies_accepted', '1');
                banner.style.opacity = '0';
                setTimeout(() => banner.remove(), 250);
            });
        }
        if (rejectBtn) {
            rejectBtn.addEventListener('click', () => {
                localStorage.setItem('cookies_accepted', '0');
                banner.style.opacity = '0';
                setTimeout(() => banner.remove(), 250);
            });
        }
    }
});

Alpine.start();
