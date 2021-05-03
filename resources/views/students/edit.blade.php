@extends('layouts.app')

@section('content')
    @include('includes.header')
    <div>
        <h1>Edit</h1>
        @include('students.form', ['method' => 'PUT', 'route' => 'student.update'])
    </div>
    @include('includes.footer')
@endsection
