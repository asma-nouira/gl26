# CLAUDE.md — Clinique Dentaire Geneviève Lafrance
# Fichier de contexte pour Claude Code
# À placer à la racine du thème : /wp-content/themes/vsc-theme/CLAUDE.md

---

## 🏥 Projet

- **Client** : Clinique Dentaire Geneviève Lafrance
- **Site** : cliniquedentairegl.com
- **Type** : Site vitrine — refonte complète
- **Adresse** : 290, boul. de l'Hôtel-de-Ville, suite 100, Rivière-du-Loup (QC)
- **Pages** : 22 écrans (maquette Adobe XD)

---

## ⚙️ Stack technique

- **CMS** : WordPress
- **Page builder** : Visual Composer (WPBakery)
- **Thème** : vsc-theme (thème custom vierge)
  - Auteur : Virus Santé Communication
  - Version : 9.2
  - Préfixe des fonctions PHP : `vsc_theme_`
- **Déploiement** : Serveur via FTP/cPanel
- **PHP** : 8.1+
- **Build** : Gulp + SASS (toujours modifier les `.scss`, jamais les `.css` directement)

---

## 📁 Structure des fichiers du thème

```
/wp-content/themes/vsc-theme/
├── style.css                        ← Déclaration du thème
├── functions.php                    ← Hooks PHP (préfixe: vsc_theme_)
├── header.php / footer.php
├── integrated_vc.php                ← Intégration Visual Composer
├── sass/
│   ├── style.scss                   ← SASS principal ← MODIFIER ICI
│   ├── header.scss
│   ├── mobile.scss
│   ├── parts/fonts.scss             ← Import des polices
│   └── clinique-dentaire-gl.scss   ← Notre framework cd-* ← CRÉER ICI
├── css/                             ← Compilé par Gulp — NE PAS MODIFIER
│   ├── style.css
│   ├── header.css
│   ├── mobile.css
│   └── fonts/
│       ├── Manrope/                 ← Fichiers de police Manrope
│       └── SuperBlue/              ← Fichiers de police SuperBlue
├── gulpfile.js                      ← gulp pour compiler
└── CLAUDE.md                        ← Ce fichier
```

---

## 🎨 Couleurs — Codes exacts de la maquette XD

```css
:root {
  /* --- Couleurs principales --- */
  --cd-primary:        #849994;   /* Vert/teal — couleur principale */
  --cd-primary-dark:   #6d8480;   /* Hover primary */
  --cd-primary-light:  #e8efee;   /* Fond léger teal */

  --cd-accent:         #C58E80;   /* Terracotta — CTA, accents */
  --cd-accent-dark:    #b07060;   /* Hover accent */
  --cd-accent-light:   #f5e8e4;   /* Fond léger terracotta */

  --cd-brown:          #625756;   /* Brun foncé — éléments secondaires */
  --cd-rose:           #BF9F94;   /* Rose/beige */

  /* --- Neutres --- */
  --cd-dark:           #242424;   /* Titres */
  --cd-text:           #383839;   /* Corps de texte */
  --cd-bg:             #FFFFFF;   /* Fond blanc */
  --cd-bg-alt:         #F4F3EF;   /* Fond alterné (crème) */
  --cd-bg-warm:        #F3F1ED;   /* Fond blanc cassé */
  --cd-border:         #e5e3df;   /* Bordures */

  /* --- Typographie --- */
  --cd-font-heading:   'SuperBlue', serif;      /* Titres H1-H4 */
  --cd-font-body:      'Manrope', sans-serif;   /* Corps de texte */
}
```

---

## 🔤 Polices locales

**Fichier de déclaration** : `css/fonts/fonts.css` (déjà créé)

**Structure dans le thème** :
```
css/fonts/
├── fonts.css          ← @font-face déclarations
├── Manrope/           ← Dossier des fichiers Manrope
│   ├── Manrope-Regular.ttf
│   ├── Manrope-Medium.ttf
│   ├── Manrope-SemiBold.ttf
│   ├── Manrope-Bold.ttf
│   └── Manrope-ExtraBold.ttf
└── SuperBlue/         ← Dossier des fichiers SuperBlue
    └── SuperBlue-Regular.ttf
```

**Import dans SASS** — dans `sass/parts/fonts.scss` :
```scss
@import url('../css/fonts/fonts.css');
```

---

## 🧱 Visual Composer — Classes cd-*

**Principe** : dans le champ "Extra class name" de chaque élément VC.

**Exemples fréquents :**
```
Section fond crème        → cd-section cd-bg-alt
Section fond blanc cassé  → cd-section cd-bg-warm
Titre de section centré   → cd-section-title
Sous-titre                → cd-section-subtitle
Bouton principal (teal)   → cd-btn cd-btn-primary
Bouton CTA (terracotta)   → cd-btn cd-btn-accent
Carte service             → cd-card-service cd-fade-in
Bannière page intérieure  → cd-page-banner
Section CTA gradient      → cd-cta
```

---

## 🛠️ Enqueue dans functions.php

```php
// Polices locales
add_action('wp_enqueue_scripts', 'vsc_theme_fonts');
function vsc_theme_fonts() {
    wp_enqueue_style('cdgl-fonts',
        get_template_directory_uri() . '/css/fonts/fonts.css',
        array(), '1.0.0'
    );
}

// Framework CSS cd-* (compilé via Gulp depuis sass/clinique-dentaire-gl.scss)
add_action('wp_enqueue_scripts', 'vsc_theme_cdgl_framework');
function vsc_theme_cdgl_framework() {
    wp_enqueue_style('cdgl-framework',
        get_template_directory_uri() . '/css/clinique-dentaire-gl.css',
        array('cdgl-fonts'), '1.0.0'
    );
}

// Animations scroll
add_action('wp_footer', 'vsc_theme_scroll_animations');
function vsc_theme_scroll_animations() { ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('cd-visible');
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.cd-fade-in,.cd-fade-left,.cd-fade-right')
        .forEach(el => observer.observe(el));
});
</script>
<?php }
```

---

## 📄 Pages du site (22 pages)

```
Pages principales  : Accueil, Équipe, La clinique, Contact, Blogue
Pages services     : Blanchiment, Implantologie, Dentisterie esthétique,
                     Couronne CEREC, Facettes, Bruxisme, Dentisterie générale,
                     Greffe gingivale, Sédation consciente, Endodontie,
                     Parodontie, Scellant, Dents de sagesse, Prothèses, Protecteur buccal
Autres             : Conseils post-opératoires
```

---

## ✅ Conventions de code

- **SASS** : Modifier `.scss` dans `/sass/`, puis `gulp` pour compiler
- **PHP** : Préfixe `vsc_theme_` pour toutes les nouvelles fonctions
- **Classes CSS** : Préfixe `cd-` pour toutes les classes custom
- **Couleurs** : Toujours `var(--cd-*)`, jamais de valeurs hardcodées
- **Polices** : `var(--cd-font-heading)` pour titres, `var(--cd-font-body)` pour texte
- **Pas de CSS inline** dans VC — tout passe par les classes `cd-*`

---

## 💬 Instructions pour Claude Code

1. Modifier le SASS → fichiers dans `sass/`, jamais dans `css/`
2. Utiliser les classes `cd-*` et les variables `--cd-*`
3. Préfixer les fonctions PHP avec `vsc_theme_`
4. HTML pour VC → mode "Custom HTML" dans l'éditeur
5. Toujours responsive (breakpoint 768px)
6. PHP 8.1+
