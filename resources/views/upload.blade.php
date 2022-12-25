@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="jumbotron">
            {% if assignment_uploaded %}
            <h1>Assignment is uploaded successfully.</h1>
            {% else %}
            <h1>Upload Assignment</h1>
            <form enctype="multipart/form-data" method="post">
                {% csrf_token %}
                {% bootstrap_form form %}
                <input type="submit" class="btn btn-danger" name="" value="Upload">
            </form>
            {% endif %}
        </div>
    </div>
@endsection
