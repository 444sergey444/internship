@extends('layouts.app')

@section('content')
    @include('includes.header')
    <div>
        <h1>Edit</h1>
        @include('subjects.form', ['method' => 'PUT', 'route' => 'subject.update'])
    </div>
    @include('includes.footer')
@endsection
