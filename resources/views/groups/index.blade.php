@extends('layouts.app')

@section('content')
    @include('includes.header')
    <div>
        <div>
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name group</th>
                    <th>
                        <a href="{{ route('group.create') }}">
                            Add
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($paginator as $group)
                    <tr>
                        <td>{{ $group->id }}</td>
                        <td>
                            <a href="{{ route('group.show', ['id' => $group->id]) }}">
                                {{ $group->name }}
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <br/>
            <div style="width: 30px;">
                {{ $paginator->links() }}
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection
