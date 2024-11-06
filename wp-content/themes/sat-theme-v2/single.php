<?php
get_header();

?>

<div class="container-fluid p-5 mt-5">
    <div class="row align-items-start">
        <?php
        if (have_posts()) {

            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content', 'article');
            }
        }
        ?>
    </div>






</div>




<?php
get_footer();
?>