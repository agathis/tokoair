<html>
<head>
    <title>Meal Planning - Catering Management System</title>
</head>
<body>
@if(session('success'))
    {{session('success')}}
@endif
<a href="{{route('meal-planning.create')}}">Tambah Baru</a>
<table border="1" align="center">
    <thead>
    <th>Meal for</th>
    <th>Voyage Class</th>
    <th>Dry Menu</th>
    <th>Menu</th>
    <th>Voyage Planning</th>
    <th>Meal Time</th>
    <th>Jumlah Hari</th>
    <th>Action</th>
    </thead>
    <tbody>
    @foreach($meal_plannings as $meal_planning)
        <tr>
            <td>{{$meal_planning->meal_for}}</td>
            <td>
                @foreach($voyage_classes as $voyage_class)
                    @if($voyage_class->id == $meal_planning->voyage_class_id)
                        {{$voyage_class->class}}
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($menus as $menu)
                    @if($menu->id == $meal_planning->dry_menu)
                        {{$menu->name}}
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($menus as $menu)
                    @if($menu->id == $meal_planning->menu_id)
                        {{$menu->name}}
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($voyage_plannings as $voyage_planning)
                    @if($voyage_planning->id == $meal_planning->voyage_planning_id)
                        {{$voyage_planning->crew_qty}}
                    @endif
                @endforeach
            </td>
            <td>{{$meal_planning->meal_time}}</td>
            <td>{{$meal_planning->number_days}}</td>
            <td>
                <a href="{{route('meal-planning.update', ['id' => $meal_planning->id])}}">Update</a>
                <a href="{{route('meal-planning.delete', ['id' => $meal_planning->id])}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>