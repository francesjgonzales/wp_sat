<div class="container">
    <img src="static/images/main2.png" class="heroImg" alt="mainImg">
</div>

<div class="container">
    <div class="heroTxt">
        <h2>Welcome!</h2>
        <h4>Student Attendance Tracker</h4>
        <p>A website that help teachers manage <br>student attendance record</p>
        <br>
        <p>Sign up as a...</p>
        <a href="{{ url_for('show_create_teacher') }}" class="btn btn" role="button" aria-pressed="true">Teacher</a>

        <a href="{{ url_for('show_create_parent') }}" class="btn btn" role="button" aria-pressed="true">Parent</a>
    </div>
</div>