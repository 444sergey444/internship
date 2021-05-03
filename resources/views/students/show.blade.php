@extends('layouts.app')

@section('content')
    @include('includes.header')
    <div>
        <h1>Student page</h1>
        First name:<input type="text" value="{{ $student->first_name }}" readonly>
        Second name:<input type="text" value="{{ $student->second_name }}" readonly>
        <a href="{{ route('student.edit', ['id' => $student->id]) }}">
            Edit
        </a>
        <form action="{{ route('student.delete', ['id' => $student->id]) }}" method="post">
            @csrf
            <input class="btn btn-default" type="submit" value="Delete" />
            <input type="hidden" name="_method" value="delete" />
        </form>
    </div>
    @include('includes.footer')
@endsection
