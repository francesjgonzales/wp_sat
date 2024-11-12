<?php
/* Template Name: Agenda Single */
get_header();
?>

<div class="container-fluid mt-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/teacher-access">Teacher Access</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/agenda">Agenda</a></li>
        </ol>
    </nav>
    <div class="row align-items-start">
        <h3 class="mt-2">Agenda</h3>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="container">
                    <p><?php the_field('task'); ?></p>
                    <p>Deadline: <?php the_field('deadline'); ?></p>
                </div>
        <?php endwhile;
        else :
            echo '<p>No Agenda items found.</p>';
        endif;
        ?>
    </div>
</div>


<?php get_footer(); ?>