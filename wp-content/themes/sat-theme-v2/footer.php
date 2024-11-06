    <!-- wp footer -->
    <?php
    wp_footer()
    ?>

    <div class="container-fluid p-5 mt-5 position-absolute">
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
        <div class="mt-1">
            <p class="text-center text-body-secondary">© 2024 SAT</p>

        </div>

    </div>


    </body>

    </html>