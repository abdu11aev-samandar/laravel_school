@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="jumbotron">
            {% if message_sent %}
            <h2>Message is sent successfully.</h2>
            {% else %}
            <h1 style="text-align: center;">Write a message to {{ teacher.name }}</h1>
            <h6 style="text-align: center;">After sending message you will not be able to delete or edit message.</h6>
            <hr>
            <form method="post">
                {% csrf_token %}
                {{ form.as_p }}
                <input type="submit" class="btn btn-primary" name="" value="Send Message">
            </form>
            {% endif %}
        </div>
    </div>
@endsection
