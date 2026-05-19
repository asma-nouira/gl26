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
                <img src="/wp-content/uploads/2026/05/Logo-Gl.png" alt=" Clinique dentaire Geneviève Lafrance de Rivière-du-Loup" />
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
                <a href="tel:+14188672260" class="cd-btn cd-btn-accent cd-btn-sm">
                    (418) 867-2260
                </a>
                <a href="/coin-enfant" class="cd-btn cd-btn-brown cd-btn-sm">
                    Coin enfant
                </a>
                <a href="https://www.facebook.com/cliniquedentairegl"
                   class="cd-footer-facebook"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
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
        </div>

    </div>

    <!-- Bas de footer -->
    <div class="cd-footer-bottom">
        <p>© <?php echo date('Y'); ?> Clinique dentaire Geneviève Lafrance. Tous droits réservés.</p>
        <p>Conception web : <a href="https://virussantecommunication.ca" target="_blank" rel="noopener">Virus Santé Communication</a></p>
    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
