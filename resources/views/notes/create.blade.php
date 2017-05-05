@extends('layout')

@section('content')
    <h1>Create a note</h1>
    @include('partials/errors')
    <form method="POST" action="{{ url('notes') }}" class="form">
        {!! csrf_field() !!}
        <textarea name="note" class="form-control" placeholder="Write your note here...">{{ old('note')}}</textarea>
        <button type="submit" class="btn btn-primary">Create note</button>
    </form>
@endsection