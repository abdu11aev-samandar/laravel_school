<div class="sidebar">
    <ul>
        {% if user.is_authenticated %}
        {% if user.is_teacher%}
        <li><a href="{% url 'classroom:upload_assignment' %}">Upload Assignment</a></li>
        <li><a href="{% url 'classroom:assignment_list' %}">Assignment list</a></li>
        <li><a href="{% url 'classroom:submit_list' %}">View Submissions</a></li>
        <li><a href="{% url 'classroom:students_list' %}">All Students List</a></li>
        <li><a href="{% url 'classroom:class_student_list'%}">Class Students List</a></li>
        <li><a href="{% url 'classroom:write_notice' %}">Write Notice</a></li>
        <li><a href="{% url 'classroom:messages_list' pk=user.pk %}">Inbox</a></li>
        <li><a href="{% url 'classroom:teacher_detail' pk=user.pk %}">Profile</a></li>
        {% else %}
        <li><a href="{% url 'classroom:all_marks_list' pk=user.pk %}">Marks</a></li>
        <li><a href="{% url 'classroom:class_notice' pk=user.pk %}">Class Notice</a></li>
        <li><a href="{% url 'classroom:class_assignment' %}">Class Assignment</a></li>
        <li><a href="{% url 'classroom:teachers_list' %}">Teacher list</a></li>
        <li><a href="{% url 'classroom:student_detail' pk=user.pk %}">Profile</a></li>
        {% endif %}
        <li><a href="{% url 'classroom:change_password' %}">Change Password</a></li>
        <li><a href="{% url 'classroom:logout' %}">Logout</a></li>
        {% else %}
        <li><a class="head-left" href="{% url 'classroom:login' %}">Login</a></li>
        <li><a class="head-left" href="{% url 'classroom:signup' %}">Sign Up</a></li>
        {% endif %}
    </ul>
</div>
