@extends('layouts.app')

@section('content')
    @include('includes.header')
    <div>
        <div>
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Subject name</th>
                    <th>
                        <a href="{{ route('subject.create') }}">
                            Add
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($paginator as $subject)
                    <tr>
                        <td>{{ $subject->id }}</td>
                        <td>
                            <a href="{{ route('subject.show', ['id' => $subject->id]) }}">
                                {{ $subject->name }}
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
