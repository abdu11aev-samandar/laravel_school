@extends('layouts.main')
@section('content')
    <div class="student-list">
        <div class="container">
            {% if messages %}
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {% for message in messages %}
                <div class="alert {% if message.tags %} alert-{{ message.tags }}{% endif %}">{{ message|safe }}</div>
                {% endfor %}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {% endif %}
            <form method='GET' action="{% url 'classroom:students_list' %}" class="searchme">
                <p>Search Student: <input type='search' name='q' placeholder='Search'></p>
            </form>
            <div class="row">
                {% for student in students_list %}
                <div class="col-6 col-md-4">
                    <div class="student-box">
                        <div class="imgBx">
                            {% if student.student_profile_pic %}
                            <img src="{{ student.student_profile_pic.url }}" alt="">
                            {% else %}
                            {% if forloop.counter0|divisibleby:"2" %}
                            <img src="{% static 'images/login-avatar.PNG' %}" alt="">
                            {% else %}
                            <img src="{% static 'images/login-avatar-2.PNG' %}" alt="">
                            {% endif %}
                            {% endif %}
                        </div>
                        <div class="content">
                            <h3>{{ student.name }}</h3>
                            <p><i class="far fa-user"></i> Username: {{ student.user.username }}</p>
                            <p><i class="fal fa-user-tag"></i> Roll No.: {{ student.roll_no }}</p>
                            <p><i class="far fa-phone"></i> Phone: {{ student.phone }}</p>
                            <p><i class="far fa-envelope-open-text"></i> Email ID: {{ student.email }}</p>
                            <a href="{% url 'classroom:add_student' pk=student.pk %}"><p class="add-button">ADD</p> </a>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>

@endsection
