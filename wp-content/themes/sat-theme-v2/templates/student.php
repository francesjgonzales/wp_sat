<?php
/* Template Name: Student Page */
get_header();
?>

<div class="container-fluid mt-5">
    <div class="row align-items-start">
        <h1 class="mb-5">Student Page</h1>
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