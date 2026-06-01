document.addEventListener('DOMContentLoaded', function () {

    var header    = document.querySelector('.site-header');
    var hamburger = document.querySelector('.hamburger');
    var navWrapper = document.querySelector('.site-header nav');

    /* --- Header sticky --- */
    if (header) {
        window.addEventListener('scroll', function () {
            header.classList.toggle('scrolled', window.scrollY > 30);
        }, { passive: true });
    }

    /* --- Hamburger --- */
    if (hamburger && navWrapper) {
        hamburger.addEventListener('click', function () {
            var isOpen = navWrapper.classList.toggle('open');
            hamburger.classList.toggle('open', isOpen);
        });

        document.addEventListener('click', function (e) {
            if (!header.contains(e.target)) {
                navWrapper.classList.remove('open');
                hamburger.classList.remove('open');
            }
        });
    }

    /* --- Lien actif --- */
    var currentUrl = window.location.href;
    document.querySelectorAll('#primary-menu a').forEach(function (link) {
        if (link.href === currentUrl) {
            link.closest('li').classList.add('current-menu-item');
        }
    });

    /* --- Observer animations --- */
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('cd-visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll(
        '.cd-fade-in, .cd-fade-left, .cd-fade-right, .cd-service-card, .cd-team-member, .cd-team-grid-item'
    ).forEach(function (el) {
        observer.observe(el);
    });
});

/* --- Sous-menu accordéon (délégation sur document) --- */
document.addEventListener('click', function(e) {
    if (window.innerWidth > 1024) return;

    var link = e.target.closest('#primary-menu > .menu-item-has-children > a');
    if (!link) return;

    e.preventDefault();
    e.stopPropagation();

    var parent = link.closest('li');
    var isOpen = parent.classList.contains('open');

    document.querySelectorAll('#primary-menu > .menu-item-has-children.open')
        .forEach(function(item) { item.classList.remove('open'); });

    if (!isOpen) parent.classList.add('open');
});
/* --- Popup Rendez-vous --- */
var overlay = document.getElementById('cdRdvOverlay');

if (overlay) {

    /* Ouvrir — tous les boutons avec classe cd-rdv-trigger */
    document.addEventListener('click', function(e) {
        var trigger = e.target.closest('.cd-rdv-trigger');
        if (trigger) {
            e.preventDefault();
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    });

    /* Fermer — bouton X */
    overlay.querySelector('.cd-rdv-close').addEventListener('click', function() {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    });

    /* Fermer — clic sur overlay */
    overlay.addEventListener('click', function(e) {
        if (e.target === overlay) {
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        }
    });

    /* Fermer — touche Escape */
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && overlay.classList.contains('active')) {
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        }
    });
}