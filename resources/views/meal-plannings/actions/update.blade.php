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
<form method="post" action="{{route('meal-planning.update', ['id' => $meal_planning->id])}}">

    <input type="hidden" name="_method" value="PUT">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Meal For
        <input type="text" name="meal_for" value="{{ $meal_planning->meal_for }}"/>
    </p>
    <p>
        Voyage Class
        <select name="voyage_class_id">
            @foreach($voyage_classes as $voyage_class)
                <option value="{{$voyage_class->id}}" @if($voyage_class->id == $meal_planning->voyage_class_id) selected @endif>{{$voyage_class->class}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Dry Menu
        <select name="dry_menu">
            @foreach($menus as $menu)
                <option value="{{$menu->id}}" @if($menu->id == $meal_planning->dry_menu) selected @endif>{{$menu->name}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Menu
        <select name="menu_id">
            @foreach($menus as $menu)
                <option value="{{$menu->id}}" @if($menu->id == $meal_planning->menu_id) selected @endif>{{$menu->name}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Voyage Planning
        <select name="voyage_planning_id">
            @foreach($voyage_plannings as $voyage_planning)
                <option value="{{$voyage_planning->id}}" @if($voyage_planning->id == $meal_planning->voyage_planning_id) selected @endif>{{$voyage_planning->crew_qty}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Meal time
        <input type="text" name="meal_time" value="{{ $meal_planning->meal_time }}"/>
    </p>
    <p>
        Jumlah Hari
        <input type="number" name="number_days" value="{{ $meal_planning->number_days }}"/>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>