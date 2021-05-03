@extends('layouts.app')

@section('content')
    @include('includes.header')
    <div>
        <h1>Create new group</h1>
        @include('groups.form', ['method' => 'POST', 'route' => 'group.store'])
    </div>
    @include('includes.footer')
@endsection
