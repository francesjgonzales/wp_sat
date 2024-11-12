<?php
/* Template Name: Announcement Single */
get_header();
?>

<div class="container-fluid mt-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/announcements">Announcements</a></li>
        </ol>
    </nav>
    <div class="row align-items-start">
        <h3><?php the_title() ?></h3>

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="container">
                    <p>Date: <?php the_field('event_date'); ?></p>
                    <p>Time: <?php the_field('time'); ?></p>
                </div>
                <div class="mt-2">
                    <?php the_field('event-title'); ?>
                    <p><?php the_field('message'); ?></p>
                </div>

        <?php endwhile;
        else :
            echo '<p>No items found.</p>';
        endif;
        ?>
    </div>
</div>


<?php get_footer(); ?>