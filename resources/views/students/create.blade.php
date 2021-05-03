@extends('layouts.app')

@section('content')
    @include('includes.header')
    <div>
        <h1>Add new student</h1>
        @include('students.form', ['method' => 'POST', 'route' => 'student.store'])
    </div>
    @include('includes.footer')
@endsection
