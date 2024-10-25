@extends('layouts.app')
@include('layouts.navbar');

@section('content')
    <div
        class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="max-w-sm mx-auto" action="{{ route('commands.store') }}" method="POST">
            @csrf
            @include('commands._partials.form')
        </form>
    </div>
@stop
