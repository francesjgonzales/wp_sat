<?php
get_header();
?>

<div class="container-fluid p-5 mt-5">
    <div class="row align-items-start">
        <div class="col">
            <div class="card-body mb-5">
                <h2>Student Attendance Tracker (SAT)</h2>
                <h5>A school management tool for educators</h5>
                <br>
                <p>Please select your account type</p>
                <div>
                    <a href="/registration/" class="btn btn" role="button" aria-pressed="true">Teacher</a>

                    <a href="{{ url_for('show_create_parent') }}" class="ms-5 btn btn" role="button" aria-pressed="true">Parent</a>
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