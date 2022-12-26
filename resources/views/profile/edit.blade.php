{{--<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>--}}

@extends('layouts.main')
@section('content')
    <div class="login-page">
        <img src="/images/login-background.PNG" alt="">
        <div class="login-form">
            <div class="avatar">
                <img src="/images/login-avatar.PNG" alt="">
            </div>
            {{--{% if messages %}
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {% for message in messages %}
                <div class="alert {% if message.tags %} alert-{{ 'message.tags '}}{% endif %}">{{ message|safe }}</div>
                {% endfor %}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {% endif %}--}}
            <h1>Login</h1>
            <form action="{{ route('password.update') }}" method="post">
                @csrf
                @method('PUT')
                <p>Username:</p>
                <input type="text" name="username" placeholder="Enter your username">
                <br>
                <br>
                <p>Password:</p>
                <input type="password" name="password" placeholder="Enter password">
                <br>
                <br>
                <p>Confirm Password:</p>
                <input type="password" name="password" placeholder="Confirm password">
                <br>
                <br>
                <input class="btn btn-primary" type="submit" name="" value="">
            </form>
        </div>
    </div>
@endsection
