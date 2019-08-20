@extends('layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>

    </title>
</head>
<body>
<h1>
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
        <a href="/projects/create"><button class="button is-link">A New Project</button>
        </a>
    </div>
</div>
// hello
</body>
</html>
@endsection
