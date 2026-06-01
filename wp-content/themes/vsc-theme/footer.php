<?php
/**
 * Footer — Clinique Dentaire Geneviève Lafrance
 * Fichier : footer.php
 */
?>

<footer class="cd-footer">
    <div class="cd-footer-inner">

        <!-- Colonne 1 : Logo + Adresse -->
        <div class="cd-footer-col cd-footer-brand">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="cd-footer-logo">
                <img src="/wp-content/uploads/2026/05/Gl-logo-Footer.svg" alt=" Clinique dentaire Geneviève Lafrance de Rivière-du-Loup" />
            </a>
            <address class="cd-footer-address">
                290, boul. de l'Hôtel-de-Ville,<br>
                suite 100 à Rivière-du-Loup
            </address>
        </div>

        <!-- Colonne 2 : Menu + Boutons -->
        <div class="cd-footer-col cd-footer-nav">
            <h4 class="cd-footer-title">Menu</h4>
            <div class="cd-footer-menu-grid">
              <?php echo do_shortcode('[footer_menu1]'); ?>
               <?php echo do_shortcode('[footer_menu2]'); ?>
            </div>

            <!-- Boutons -->
            <div class="cd-footer-actions">
                <a href="tel:+14188672260" class="cd-btn cd-btn-accent">
                    (418) 867-2260
                </a>
                <a href="/conseils-post-operatoires/#coin-enfant" class="cd-btn cd-btn-brown ">
                    Coin enfant
                </a>
                <a href="https://www.facebook.com/cliniquedentairegl"
                   class="cd-footer-facebook"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="Facebook">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20.103" height="38.691" viewBox="0 0 20.103 38.691">
  <path id="Tracé_430" data-name="Tracé 430" d="M770.614,48.566h-7.191V30.912h-5.877V24.056h5.85c.013-.289.031-.515.035-.742.034-1.91-.023-3.825.113-5.728a7.937,7.937,0,0,1,8.028-7.7c1.819-.053,3.645.09,5.467.153a4.285,4.285,0,0,1,.61.113v6.154c-.734,0-1.412-.016-2.087,0-.942.026-1.891.016-2.822.133a2.1,2.1,0,0,0-2.009,2.014c-.1,1.832-.027,3.672-.027,5.576h6.717l-.885,6.874h-5.921Z" transform="translate(-757.546 -9.875)"/>
</svg>

                </a>
            </div>
        </div>

        <!-- Colonne 3 : Heures d'ouverture -->
        <div class="cd-footer-col cd-footer-hours">
            <h4 class="cd-footer-title">Heures d'ouverture</h4>
            <table class="cd-footer-hours-table">
                <tr>
                    <td>Lundi</td>
                    <td>8h30 - 20h30</td>
                </tr>
                <tr>
                    <td>Mardi / Mercredi</td>
                    <td>8h30 - 17h00</td>
                </tr>
                <tr>
                    <td>Jeudi</td>
                    <td>8h30 - 16h00</td>
                </tr>
                <tr>
                    <td>Vendredi</td>
                    <td>Fermé</td>
                </tr>
            </table>

            <a href="/politique-de-confidentialite/" class="underline">Politique de confidentialité</a>
        </div>

    </div>

    <!-- Bas de footer -->
    <div class="cd-footer-bottom">
        <p>© <?php echo date('Y'); ?> Clinique dentaire Geneviève Lafrance. Tous droits réservés.</p>
        <p>Conception web : <a href="https://virussantecommunication.ca" target="_blank" rel="noopener">Virus Santé Communication</a></p>
    </div>

</footer>
<!-- Popup Rendez-vous -->
<div class="cd-rdv-overlay" id="cdRdvOverlay">
    <div class="cd-rdv-popup">
        <button class="cd-rdv-close" aria-label="Fermer">✕</button>
        <div class="cd-rdv-header">
            <h2>Prendre rendez-vous</h2>
            <p>Remplissez le formulaire et nous vous contacterons dans les plus brefs délais.</p>
        </div>
        <div class="cd-rdv-form">
            <?php echo do_shortcode('[contact-form-7 id="VOTRE_ID" title="Rendez-vous"]'); ?>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
