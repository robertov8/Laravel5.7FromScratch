@extends('layout')

@section('content')
    <h1 class="title">Create a New Project</h1>

    <form method="POST" action="/projects" style="margin-bottom: 1em;">
        {{ csrf_field() }}

        <div class="field">
            <label for="title" class="label"></label>
            <div class="control">
                <input type="text"  id="title" name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" placeholder="Title" value="{{ old('title') }}"  required />
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>

            <div class="control">
                <textarea name="description" id="description" cols="30" rows="10" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" required>{{ old('description') }}</textarea>
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