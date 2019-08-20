@extends('layout')
@section('content')
    <h1 class="title"> ADD Project</h1>
    <form method="POST" action="/projects" style="margin-bottom:10px;">
        @csrf
        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input name="title" class="input {{$errors->has('title')? 'is-danger' : ''}}" type="text" placeholder="Title" value="{{old('title')}}" required>
            </div>
        </div>



        <div class="field">
            <label class="label" for="description">Project Description</label>
            <div class="control">

                <textarea name="description" class="textarea {{$errors->has('description ')? 'is-danger' : ''}}" placeholder="Project Description" required >{{old('description')}}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>
        @include('errors')
    </form>
@endsection
