/* ============================================================
   HEADER JS — Clinique Dentaire Geneviève Lafrance
   Fichier : js/header.js
   ============================================================ */

document.addEventListener('DOMContentLoaded', function () {

    const header    = document.querySelector('.site-header');
    const hamburger = document.querySelector('.hamburger');
    const navWrapper = document.querySelector('.site-header nav > div');

    /* --- Header sticky au scroll --- */
    if (header) {
        window.addEventListener('scroll', function () {
            header.classList.toggle('scrolled', window.scrollY > 30);
        }, { passive: true });
    }

    /* --- Hamburger mobile --- */
    if (hamburger && navWrapper) {
        hamburger.addEventListener('click', function () {
            const isOpen = navWrapper.classList.toggle('open');
            hamburger.classList.toggle('open', isOpen);
            hamburger.setAttribute('aria-expanded', isOpen);
        });

        /* Fermer au clic en dehors */
        document.addEventListener('click', function (e) {
            if (!header.contains(e.target)) {
                navWrapper.classList.remove('open');
                hamburger.classList.remove('open');
                hamburger.setAttribute('aria-expanded', false);
            }
        });
    }

    /* --- Sous-menu mobile en accordéon --- */
    if (window.innerWidth <= 768) {
        document.querySelectorAll('#primary-menu .menu-item-has-children > a')
            .forEach(function (link) {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const parent = this.closest('li');
                    parent.classList.toggle('open');
                });
            });
    }

    /* --- Lien actif selon URL courante --- */
    const currentUrl = window.location.href;
    document.querySelectorAll('#primary-menu a').forEach(function (link) {
        if (link.href === currentUrl) {
            link.closest('li').classList.add('current-menu-item');
        }
    });
// Dans header.js — ajoutez cd-service-card à la liste
document.querySelectorAll('.cd-fade-in, .cd-fade-left, .cd-fade-right, .cd-service-card')
    .forEach(el => observer.observe(el));
});
