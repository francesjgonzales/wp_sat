<article class="mt-5 pt-5">
    <h4> <?php the_title() ?></h4>
    <?php
    if (have_posts()) {
        the_post();
        the_content();
    }

    ?>


</article>