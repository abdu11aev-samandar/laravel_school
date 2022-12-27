<div class="sidebar">
    <ul>
        {% if user.is_authenticated %}
        {% if user.is_teacher%}
        <li><a href="{{ route('assignments.submit-assignment') }}">Upload Assignment</a></li>
        <li><a href="{{ route('assignments.submit-mark') }}">Assignment list</a></li>
        <li><a href="{{ route('marks.submitted-assignment') }}">View Submissions</a></li>
        <li><a href="{% url 'classroom:class_student_list'%}">Class Students List</a></li>
        <li><a href="{% url 'classroom:write_notice' %}">Write Message</a></li>
        <li><a href="{{ route('detail') }}">Teacher Profile</a></li>
        {% else %}
        <li><a href="{{ route('marks.submitted-mark') }}">Marks</a></li>
        <li><a href="{% url 'classroom:class_notice' pk=user.pk %}">Class Message</a></li>
        <li><a href="{{ route('marks.submitted-assignment') }}">Class Assignment</a></li>
        <li><a href="{% url 'classroom:teachers_list' %}">Teacher list</a></li>
        <li><a href="{{ route('detail') }}">Student Profile</a></li>
        {% endif %}
        <li><a href="{{ route('profile.edit') }}">Change Password</a></li>
        <li><a href="{{ route('logout') }}">Logout</a></li>
        {% else %}
        <li><a class="head-left" href="{{ route('login') }}">Login</a></li>
        <li><a class="head-left" href="{{ route('register') }}">Sign Up</a></li>
        {% endif %}
    </ul>
</div>
