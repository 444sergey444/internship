<div>
    <form method="POST" action="@if(!empty($group)) {{ route($route, ['id' => $group->id]) }} @else {{ route($route) }} @endif">
        @csrf
        @method($method)
        Group name:<input type="text" name="name" value="{{ old('name', !empty($group) ? $group->name : null) }}">
        <button type="submit">Submit</button>
    </form>
</div>
