@extends('layouts.app')

@section('content')
    @include('includes.header')
    <div>
        <h1>Group page</h1>
        Group name:<input type="text" value="{{ $group->name }}" readonly>
        <a href="{{ route('group.edit', ['id' => $group->id]) }}">
            Edit
        </a>
        <form action="{{ route('group.delete', ['id' => $group->id]) }}" method="post">
            @csrf
            <input class="btn btn-default" type="submit" value="Delete" />
            <input type="hidden" name="_method" value="delete" />
        </form>
    </div>
    @include('includes.footer')
@endsection
