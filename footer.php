<footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <div class="hamburger"><span></span><span></span><span></span></div>
                <div class="footer__logo"><?php the_custom_logo(); ?></div>
                <nav>
                    <div class="menu">
                        <div class="menu__close">&times;</div>
                        <div class="menu__logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo_invert.png" alt="Логотип"></div>
                        <ul>
                            <li class="menu__link"><a href="#advantages"><?php the_field('advantages_title', 2); ?></a></li>
                            <li class="menu__link"><a href="#infrastructure"><?php the_field('infrastructure_title', 2) ?></a></li>
                            <li class="menu__link"><a href="#select"><?php the_field('select_title', 2) ?></a></li>
                            <li class="menu__link"><a href="#mortgage"><?php the_field('mortgage_title', 2) ?></a></li>
                            <li class="menu__link"><a href="#contact"><?php the_field('contact_title', 2); ?></a></li>
                        </ul>
                        <div class="menu__phone">
                            <a href="tel:+74952554824">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon_social/phone.svg" alt="Позвонить">
                                <span class="phone"><?php the_field("phone", 2) ?></span>
                            </a>

                        </div>
                    </div>
                </nav>
                <div class="footer__phone">
                    <a href="tel:+74952554824">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon_social/phone.svg" alt="Позвонить">
                        <span class="phone"><?php the_field("phone", 2) ?></span>
                    </a>

                </div>
            </div>
        </div>
    </footer>
    </div>
        <?php wp_footer(); ?>
</body>

</html>