<?php
/* Template Name: Teacher Access */
get_header();
?>

<div class="container-fluid p-5 mt-5">
    <div class="row align-items-start">
        <h2><?php the_title() ?></h2>

        <?php
        // Set up a query to get the latest 5 posts
        $args = array(
            'post_type'      => 'agenda',  // Retrieves posts of type 'post'
            'posts_per_page' => 5,       // Number of posts to display
            'orderby'        => 'date',  // Order by date
            'order'          => 'DESC'   // Latest posts first
        );

        $latest_posts = new WP_Query($args); // Execute the query

        // Check if there are posts to display
        if ($latest_posts->have_posts()) :
            echo '<ul>'; // Start an unordered list
            while ($latest_posts->have_posts()) : $latest_posts->the_post();
                // Output each post title and link

                echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
                echo '<p>' . the_field('task') . '</p>';

            endwhile;
            echo '</ul>'; // Close the unordered list
        else :
            // Message if no posts are found
            echo '<p>No posts found.</p>';
        endif;

        // Reset post data to avoid conflicts with other queries
        wp_reset_postdata();
        ?>



        <?php the_content() ?>
    </div>


</div>




<?php
get_footer();
?>