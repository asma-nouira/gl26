/* ============================================================
   HEADER JS — Clinique Dentaire Geneviève Lafrance
   Fichier : js/header.js
   ============================================================ */

document.addEventListener('DOMContentLoaded', function () {

    const header = document.querySelector('.site-header');
    const hamburger = document.querySelector('.hamburger');
    const mainNav = document.querySelector('.main-nav');

    /* --- Header sticky au scroll --- */
    if (header) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 30) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }, { passive: true });
    }

    /* --- Menu hamburger mobile --- */
    if (hamburger && mainNav) {
        hamburger.addEventListener('click', function () {
            hamburger.classList.toggle('open');
            mainNav.classList.toggle('open');

            /* Accessibilité */
            const isOpen = mainNav.classList.contains('open');
            hamburger.setAttribute('aria-expanded', isOpen);
        });

        /* Fermer le menu au clic sur un lien */
        mainNav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                hamburger.classList.remove('open');
                mainNav.classList.remove('open');
            });
        });

        /* Fermer au clic en dehors */
        document.addEventListener('click', function (e) {
            if (!header.contains(e.target)) {
                hamburger.classList.remove('open');
                mainNav.classList.remove('open');
            }
        });
    }

    /* --- Lien actif selon la page courante --- */
    const currentUrl = window.location.href;
    document.querySelectorAll('.main-nav a').forEach(function (link) {
        if (link.href === currentUrl) {
            link.classList.add('active');
        }
    });

});
