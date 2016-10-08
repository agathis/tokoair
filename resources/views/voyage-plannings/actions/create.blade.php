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
<form method="post" action="{{route('voyage-planning.create')}}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Keberangkatan
        <input type="date" name="departure" value="{{ old('departure') }}"/>
    </p>
    <p>
        Kedatangan
        <input type="date" name="arrival" value="{{ old('arrival') }}"/>
    </p>
    <p>
        Safety Factor
        <input type="text" name="safety_factor" value="{{ old('safety_factor') }}"/>
    </p>
    <p>
        Jumlah Crew
        <input type="number" name="crew_qty" value="{{ old('crew_qty') }}"/>
    </p>
    <p>
        Route
        <select name="route_id">
            @foreach($routes as $route)
                <option value="{{$route->id}}">{{$route->eta}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Cruise
        <select name="cruise_id">
            @foreach($cruises as $cruise)
                <option value="{{$cruise->id}}">{{$cruise->cruise_type}}</option>
            @endforeach
        </select>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>