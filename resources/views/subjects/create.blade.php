@extends('layouts.app')

@section('content')
    @include('includes.header')
    <div>
        <h1>Create new subject</h1>
        @include('subjects.form', ['method' => 'POST', 'route' => 'subject.store'])
    </div>
    @include('includes.footer')
@endsection
