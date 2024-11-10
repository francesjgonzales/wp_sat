<?php
/* Template Name: Student Page */
get_header();
?>

<div class="container-fluid p-5 mt-5">
    <div class="row align-items-start">
        <h4>Today is
            <?php
            $today = date("F j, Y  (g:i a)");
            echo $today ?></h4>
        <?php the_content() ?>
    </div>


</div>




<?php
get_footer();
?>