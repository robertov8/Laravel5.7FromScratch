@extends('layout')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf

        <div class="field">
            <label for="title" class="label"></label>
            <div class="control">
                <input type="text"  id="title" name="title" class="input" placeholder="Title" value="{{ $project->title }}"  />
            </div>
        </div>
        
        <div class="field">
            <label for="description" class="label">Description</label>
            
            <div class="control">
                <textarea name="description" id="description" cols="30" rows="10" class="textarea">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>

        @include('errors')
    </form>

    <form method="POST" action="/projects/{{ $project->id }}" >
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete Project</button>
            </div>
        </div>
    </form>
@endsection