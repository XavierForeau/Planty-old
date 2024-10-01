                </main>
            </div>
            <footer id="footer" role="contentinfo">

                // Xavier - ajout du menu en pied de page
                <?php
                wp_nav_menu([
                    'theme-location' => 'footer',
                    'container' => false,
                    'menu_class' => 'navbar-nav mr-auto'
                ])
                ?>

            </footer>
        </div>
    <?php wp_footer(); ?>
    </body>
</html>