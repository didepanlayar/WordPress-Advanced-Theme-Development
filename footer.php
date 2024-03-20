        <!--  -->
        <footer class="site-footer">
            <div class="container">
                <div class="copyright">
                    <p><?php echo esc_html(get_theme_mod('set_copyright', esc_html__('Copyright &copy; - All Rights Reversed', 'wordev'))); ?></p>
                </div>
                <div class="footer-menu">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location'        => 'wordev_footer_menu',
                                'depth'                 => 1
                            )
                        );
                    ?>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>