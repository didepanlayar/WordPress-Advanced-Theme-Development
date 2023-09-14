        <!--  -->
        <footer class="site-footer">
            <div class="container">
                <div class="copyright">
                    <p>Copyright &copy; - All Rights Reversed</p>
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