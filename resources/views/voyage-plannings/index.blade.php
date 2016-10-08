<html>
<head>
    <title>Voyage Planning - Catering Management System</title>
</head>
<body>
@if(session('success'))
    {{session('success')}}
@endif
<a href="{{route('voyage-planning.create')}}">Tambah Baru</a>
<table border="1" align="center">
    <thead>
    <th>Keberangkatan</th>
    <th>Kedatangan</th>
    <th>Safety Factor</th>
    <th>Jumlah Crew</th>
    <th>Route</th>
    <th>Cruise</th>
    <th>Action</th>
    </thead>
    <tbody>
    @foreach($voyage_plannings as $voyage_planning)
        <tr>
            <td>
                {{date_format(date_create($voyage_planning->departure), 'd-m-Y')}}
            </td>
            <td>
                {{date_format(date_create($voyage_planning->arrival), 'd-m-Y')}}
            </td>
            <td>{{$voyage_planning->safety_factor}}</td>
            <td>{{$voyage_planning->crew_qty}}</td>
            <td>
                @foreach($routes as $route)
                    @if($route->id == $voyage_planning->route_id)
                        {{$route->eta}}
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($cruises as $cruise)
                    @if($cruise->id == $voyage_planning->cruise_id)
                        {{$cruise->cruise_type}}
                    @endif
                @endforeach
            </td>
            <td>
                <a href="{{route('voyage-planning.update', ['id' => $voyage_planning->id])}}">Update</a>
                <a href="{{route('voyage-planning.delete', ['id' => $voyage_planning->id])}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>