@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="jumbotron">
            {% if messages %}
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {% for message in messages %}
                <div class="alert {% if message.tags %} alert-{{ 'message.tags' }}{% endif %}">{{ 'message|safe' }}</div>
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
                    <th scope="col">Subject name</th>
                    <th scope="col">Uploaded By</th>
                    <th scope="col">Uploaded date</th>
                    <th scope="col">Download</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                {% for submission in teacher.teacher_submit.all %}
                <tr>
                    <th scope="row">1</th>
                    <td>Subject</td>
                    <td>Uploader Name</td>
                    <td>Uploaded Date</td>
                    <td><a href="{{-- file url --}}" class="btn btn-primary" target="_blank">Download</a></td>
                    <td><a class="btn btn-danger" href="{% url 'classroom:enter_marks' pk=submission.student.pk %}">Submit</a></td>
                </tr>
                {% endfor %}
                </tbody>
            </table>
            {% endif %}
        </div>
    </div>
@endsection
