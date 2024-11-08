<?php
get_header();
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/teacher-access">Teacher Access</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="/lesson-plan">Lesson Plan</a></li>
    </ol>
</nav>

<h3><?php get_field('lesson_title') ?></h3>
<div class="container-sm">
    <div class="col-6">
        <ul class="list-group">
            <li class="list-group-item"><strong>Teacher:</strong> <?php the_field('teacher_name') ?></li>
            <li class="list-group-item"><strong>Subject:</strong> <?php the_field('subject') ?></li>
            <li class="list-group-item"><strong>Grade Level:</strong> <?php the_field('grade_level') ?></li>
            <li class="list-group-item"><strong>Duration:</strong> <?php the_field('start_date') ?> - <?php the_field('end_date') ?></li>
            <li class="list-group-item"><strong>Information:</strong> <a href="<?php the_field('lesson_information') ?>">Download File</a></li>
        </ul>
    </div>
</div>