@extends('layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>

    </title>
</head>
<body>
<h1 class="title">
    Projects
</h1>
<ul>
@foreach ($projects as $project)
    <li>
    <a href="/projects/{{ $project->id }}">
        {{ $project->title }}

    </a>
</li>
       @endforeach
</ul>
<div class="field">
    <div class="control">
        <a href="/projects/create"><button style='margin-top:10px'class="button is-link">Create A New Project</button>
        </a>
    </div>
</div>
</body>
</html>
@endsection
