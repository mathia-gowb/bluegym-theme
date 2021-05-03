<?php
    wp_footer();
?>
<footer>
        <section class="top-button"><a href="#" class="white-link"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a></section>
        <br>
        <br>
        <h2 class="footer-heading"><?=get_bloginfo()?></h2>
        <br>
        <br>
        <br>
        <section id="footer-widgets">
            <?php
                dynamic_sidebar('footer-1');
            ?>
        </section>
        <br>
        <br>
        <br>
        <section id="copyRight">
            <p>
                <span class="copy_year"> <?php echo get_bloginfo('name');?>, Built with bluegymn Wordpress Theme</span>
            </p>
            <p>Copyright &copy; <span class="copy_year"><?= date('Y')?></span></p>
            
        </section>
    </footer>
</body>
</html>