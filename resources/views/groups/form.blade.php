<div>
    <form method="POST" action="@if(isset($group)) {{ route($route, ['id' => $group->id]) }} @else {{ route($route) }} @endif">
        @csrf
        @method($method)
        Имя группы:<input type="text" name="name" value="{{ old('name', $group->name) ?? '' }}">
        <button type="submit">Отправить</button>
    </form>
</div>
