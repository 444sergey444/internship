@extends('layouts.app')

@section('content')
    @include('includes.header')
    <div>
        <h1>Edit</h1>
        @include('groups.form', ['method' => 'PUT', 'route' => 'group.update'])
    </div>
    @include('includes.footer')
@endsection
