    <!-- wp footer -->
    <?php
    wp_footer()
    ?>

    <?php
    wp_nav_menu(
        array(
            'menu' => 'footer',
            'container' => '',
            'theme_location' => 'footer',
            'items_wrap' => '<ul id="" class="nav justify-content-center border-bottom pb-3 mb-3">%3$s</ul>',
        )
    );
    ?>
    <p class="text-center text-body-secondary">© 2024 SAT</p>

    </body>

    </html>