<?php get_header(); ?>

<div class="container-fluid p-5 mt-5">
    <div class="row align-items-start">
        <h1> Single Post Agenda</h1>
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
</div>

<?php get_footer(); ?>