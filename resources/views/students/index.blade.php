@extends('layouts.app')

@section('content')
    @include('includes.header')
    <div>
        <div>
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>First name</th>
                    <th>Second name</th>
                    <th>
                        <a href="{{ route('student.create') }}">
                            Add
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($paginator as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>
                            <a href="{{ route('student.show', ['id' => $student->id]) }}">
                                {{ $student->first_name }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('student.show', ['id' => $student->id]) }}">
                                {{ $student->second_name }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('student.show', ['id' => $student->id]) }}">
                                {{ $student->second_name }}
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
