<?php
/* Template Name: Logout */
get_header();
?>

<div class="container-fluid p-5 mt-5">
    <div class="row align-items-start">
        <div class="col">
            <div class="card-body mb-5">
                <h2>Student Attendance Tracker (SAT)</h2>
                <h5>A school management tool for educators</h5>
                <br>
                <div>
                    <a href="/login/" class="btn btn" role="button" aria-pressed="true">Login</a>

                </div>
                <div>
                    <p class="mt-2">Not registered yet?<a href="/registration/ " class="" role="button" aria-pressed="true"> Sign up</a></p>

                </div>
            </div>
        </div>
        <div class="col-sm card">
            <img src="/wp-content/themes/sat-theme/assets/images/main2.png" alt="mainImg">
        </div>
    </div>
</div>




<?php
get_footer();
?>