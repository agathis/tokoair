<html>
<head>
    <title>Voyage Planning - Catering Management System</title>
</head>
<body>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="post" action="{{route('voyage-planning.update', ['id' => $voyage_planning->id])}}">

    <input type="hidden" name="_method" value="PUT">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Keberangkatan
        <input type="date" name="departure" value="{{date_format(date_create($voyage_planning->departure), 'Y-m-d')}}"/>
    </p>
    <p>
        Kedatangan
        <input type="date" name="arrival" value="{{date_format(date_create($voyage_planning->arrival), 'Y-m-d')}}"/>
    </p>
    <p>
        Safety Factor
        <input type="text" name="safety_factor" value="{{ $voyage_planning->safety_factor }}"/>
    </p>
    <p>
        Jumlah Crew
        <input type="number" name="crew_qty" value="{{ $voyage_planning->crew_qty }}"/>
    </p>
    <p>
        Route
        <select name="route_id">
            @foreach($routes as $route)
                <option value="{{$route->id}}" @if($voyage_planning->route_id == $route->id) selected @endif>{{$route->eta}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Cruise
        <select name="cruise_id">
            @foreach($cruises as $cruise)
                <option value="{{$cruise->id}}" @if($voyage_planning->cruise_id == $cruise->id) selected @endif>{{$cruise->cruise_type}}</option>
            @endforeach
        </select>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>