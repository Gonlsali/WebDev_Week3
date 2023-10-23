@extends('layouts.template')

@section('layout_content')
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>{{ $project['title'] }}</h1>
        <p>Course : {{ $project['course'] }}</p>
        <p>Code : {{ $project['code'] }}</p>
    </div>
@endsection
