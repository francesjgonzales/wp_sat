<?php
/* Template Name: Teacher Access */
get_header();
?>

<div class="container-fluid mt-5">
    <div class="row align-items-start">
        <h1><?php the_title() ?></h1>
        <h5>Welcome to the Teacher Access Page! This platform offers educators quick access to essential tools for effective classroom management, including lesson plans, student attendance, and detailed student profiles. With its user-friendly design, it streamlines administrative tasks, enabling teachers to focus on creating impactful learning experiences.</h5>
    </div>

    <div class="mt-5">
        <div class="row">
            <div class="my-3" id="agenda-list">
                <h3>Agenda</h3>
                <?php
                // Set up a query to get the latest 5 Agenda posts
                $args_agenda = array(
                    'post_type'      => 'agenda',  // Retrieves posts of type 'post'
                    'posts_per_page' => 5,       // Number of posts to display
                    'orderby'        => 'date',  // Order by date
                    'order'          => 'DESC'   // Latest posts first
                );

                $agenda_posts = new WP_Query($args_agenda); // Execute the query

                // Check if there are posts to display
                if ($agenda_posts->have_posts()) :
                    echo '<ul>'; // Start an unordered list
                    while ($agenda_posts->have_posts()) : $agenda_posts->the_post();
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
            </div>

            <div class="my-3" id="lesson-plan">
                <h3>Lesson Plan</h3>
                <?php
                // Set up a query to get the latest 5 posts
                $args_lesson_plan = array(
                    'post_type'      => 'lesson-plan',  // Retrieves posts of type 'post'
                    'posts_per_page' => 5,       // Number of posts to display
                    'orderby'        => 'date',  // Order by date
                    'order'          => 'DESC'   // Latest posts first
                );

                $lesson_plan = new WP_Query($args_lesson_plan); // Execute the query

                // Check if there are posts to display
                if ($lesson_plan->have_posts()) :
                    echo '<ul>'; // Start an unordered list
                    while ($lesson_plan->have_posts()) : $lesson_plan->the_post();
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
            </div>

        </div>

    </div>


    <!-- <?php the_content() ?> -->


</div>




<?php
get_footer();
?>