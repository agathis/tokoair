<html>
<head>
    <title>Meal Planning - Catering Management System</title>
</head>
<body>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="post" action="{{route('meal-planning.create')}}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Meal For
        <input type="text" name="meal_for" value="{{ old('meal_for') }}"/>
    </p>
    <p>
        Voyage Class
        <select name="voyage_class_id">
            @foreach($voyage_classes as $voyage_class)
                <option value="{{$voyage_class->id}}">{{$voyage_class->class}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Dry Menu
        <select name="dry_menu">
            @foreach($menus as $menu)
                <option value="{{$menu->id}}">{{$menu->name}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Menu
        <select name="menu_id">
            @foreach($menus as $menu)
                <option value="{{$menu->id}}">{{$menu->name}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Voyage Planning
        <select name="voyage_planning_id">
            @foreach($voyage_plannings as $voyage_planning)
                <option value="{{$voyage_planning->id}}">{{$voyage_planning->crew_qty}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Meal time
        <input type="text" name="meal_time" value="{{ old('meal_time') }}"/>
    </p>
    <p>
        Jumlah Hari
        <input type="number" name="number_days" value="{{ old('number_days') }}"/>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>