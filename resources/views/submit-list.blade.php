@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="jumbotron">
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

            {% if teacher.teacher_submit.count == 0 %}
            <h2>No Submissions Yet</h2>
            {% else %}
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Submitted By</th>
                    <th scope="col">Assignment</th>
                    <th scope="col">Submitted on</th>
                    <th scope="col">Download</th>
                    <th scope="col">Enter Marks</th>
                </tr>
                </thead>
                <tbody>
                {% for submission in teacher.teacher_submit.all %}
                <tr>
                    <th scope="row">{{ forloop.counter }}</th>
                    <td>{{ submission.student.name }}</td>
                    <td>{{ submission.submitted_assignment.assignment_name }}</td>
                    <td>{{ submission.created_at }}</td>
                    <td><a href="{{ submission.submit.url }}" class="btn btn-primary" target="_blank">Download</a></td>
                    <td><a class="btn btn-danger" href="{% url 'classroom:enter_marks' pk=submission.student.pk %}">Enter
                            Marks</a></td>
                </tr>
                {% endfor %}
                </tbody>
            </table>
            {% endif %}
        </div>
    </div>
@endsection
