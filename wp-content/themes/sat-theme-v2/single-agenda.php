<?php get_header(); ?>

<div class="portfolio-container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="">
                <?php the_content(); ?>
            </div>

    <?php endwhile;
    else :
        echo '<p>No Agenda items found.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>