<?php
/* Template Name: Announcements */
get_header();
?>

<div class="container-fluid mt-5">
    <div class="row align-items-start">
        <h3><?php the_title() ?></h3>

    </div>


    <div class="row">
        <div id="announcements">
            <?php
            // Set up a query to get the latest 5 posts
            $args_announcements = array(
                'post_type'      => 'announcement',  // Retrieves posts of type 'post'
                'posts_per_page' => 5,       // Number of posts to display
                'orderby'        => 'date',  // Order by date
                'order'          => 'DESC'   // Latest posts first
            );

            $announcements = new WP_Query($args_announcements); // Execute the query

            // Check if there are posts to display
            if ($announcements->have_posts()) :
                while ($announcements->have_posts()) : $announcements->the_post();
                    // Output each post title and link
                    echo '<div class="mt-5">';
                    echo '<p><a href="' . get_permalink() . '">' . get_the_title() . '</a></p>';
                    echo '<p>' . the_field('message') . '</p>';
                    echo '<p>' . the_field('event_date') . '</p>';
                    echo '<p>' . the_field('time') . '</p>';
                    echo '</div>';
                endwhile;

            else :
                // Message if no posts are found
                echo '<p>No posts found.</p>';
            endif;

            // Reset post data to avoid conflicts with other queries
            wp_reset_postdata();
            ?>
        </div>

    </div>


    <!-- <?php the_content() ?> -->


</div>




<?php
get_footer();
?>