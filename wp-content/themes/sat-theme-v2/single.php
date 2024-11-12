<?php
get_header();

?>

<div class="container-fluid mt-5">

    <h3>Single Posts</h3>


    <div class="row">
        <!-- retrieve agenda single posts -->
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="">
                    <?php the_field('task'); ?>
                    <?php the_field('deadline'); ?>
                </div>

        <?php endwhile;
        else :
            echo '<p>No Agenda items found.</p>';
        endif;
        ?>
    </div>

    <div class="row">
        <!-- show lesson plan single posts -->
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="">
                    <h3><?php the_field('lesson_title') ?></h3>
                    <div class="container-sm">
                        <?php the_field('teacher_name') ?>
                        <?php the_field('subject') ?>
                        <?php the_field('grade_level') ?>
                        <?php the_field('start_date') ?> <?php the_field('end_date') ?>
                        <?php the_field('lesson_information') ?>
                    </div>
                </div>


        <?php endwhile;
        else :
            echo '<p>No items found.</p>';
        endif;
        ?>
    </div>

    <div class="row">
        <!-- show announcement single posts -->
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="container-sm">
                    <?php the_field('event-title'); ?>
                    <?php the_field('message'); ?>
                    <?php the_field('event-date'); ?>
                    <?php the_field('time'); ?>
                </div>

        <?php endwhile;
        else :
            echo '<p>No Agenda items found.</p>';
        endif;
        ?>

    </div>

</div>




<?php
get_footer();
?>