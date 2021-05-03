<div>
    <form method="POST" action="@if(!empty($subject)) {{ route($route, ['id' => $subject->id]) }} @else {{ route($route) }} @endif">
        @csrf
        @method($method)
        Subject name:<input type="text" name="name" value="{{ old('name', !empty($subject) ? $subject->name : null) }}">
        <button type="submit">Submit</button>
    </form>
</div>
