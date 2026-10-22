import './bootstrap';
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import intersect from '@alpinejs/intersect';

window.Alpine = Alpine;
Alpine.plugin(collapse);
Alpine.plugin(intersect);

// ─── HEADER SCROLL EFFECT ─────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('site-header');
    if (header) {
        const onScroll = () => {
            if (window.scrollY > 20) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll(); // run immediately
    }

    // ─── SCROLL ANIMATIONS ───────────────────────────────────
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, entry.target.dataset.delay || 0);
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );

    document.querySelectorAll('.fade-up, .fade-in').forEach((el, i) => {
        // Stagger children in same parent
        if (!el.dataset.delay) {
            const siblings = Array.from(el.parentElement.querySelectorAll('.fade-up, .fade-in'));
            const idx = siblings.indexOf(el);
            el.dataset.delay = idx * 80;
        }
        observer.observe(el);
    });

    // ─── COOKIE BANNER ──────────────────────────────────────
    const banner = document.getElementById('cookie-banner');
    if (banner) {
        if (!localStorage.getItem('cookies_accepted')) {
            banner.style.display = 'flex';
        } else {
            banner.remove();
        }
        const acceptBtn = document.getElementById('cookie-accept');
        const rejectBtn = document.getElementById('cookie-reject');
        const accept = () => {
            localStorage.setItem('cookies_accepted', '1');
            banner.style.opacity = '0';
            setTimeout(() => banner.remove(), 300);
        };
        if (acceptBtn) acceptBtn.addEventListener('click', accept);
        if (rejectBtn) rejectBtn.addEventListener('click', () => {
            localStorage.setItem('cookies_accepted', '0');
            banner.style.opacity = '0';
            setTimeout(() => banner.remove(), 300);
        });
    }
});

Alpine.start();
