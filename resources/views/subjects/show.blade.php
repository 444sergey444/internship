@extends('layouts.app')

@section('content')
    @include('includes.header')
    <div>
        <h1>Subject page</h1>
        Subject name:<input type="text" value="{{ $subject->name }}" readonly>
        <a href="{{ route('subject.edit', ['id' => $subject->id]) }}">
            Edit
        </a>
        <form action="{{ route('subject.delete', ['id' => $subject->id]) }}" method="post">
            @csrf
            <input class="btn btn-default" type="submit" value="Delete" />
            <input type="hidden" name="_method" value="delete" />
        </form>
    </div>
    @include('includes.footer')
@endsection
