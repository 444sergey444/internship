<div>
    <form method="POST" action="@if(!empty($student)) {{ route($route, ['id' => $student->id]) }} @else {{ route($route) }} @endif">
        @csrf
        @method($method)
        Student first name:<input type="text" name="first_name" value="{{ old('first_name', !empty($student) ? $student->first_name : null) }}">
        Student second name:<input type="text" name="second_name" value="{{ old('second_name', !empty($student) ? $student->second_name : null) }}">
        <select name="group_id">
            @foreach($groups as $group)
                <option value="{{ $group->id }}">{{ $group->name }}</option>
            @endforeach
        </select>
        <button type="submit">Submit</button>
    </form>
</div>
