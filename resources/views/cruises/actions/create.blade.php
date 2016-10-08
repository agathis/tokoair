<html>
<head>
    <title>Cruise - Catering Management System</title>
</head>
<body>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="post" action="{{route('cruise.create')}}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Voyage Start
        <input type="date" name="voyage_number_start" value="{{ old('voyage_number_start') }}"/>
    </p>
    <p>
        Voyage End
        <input type="date" name="voyage_number_end" value="{{ old('voyage_number_end') }}"/>
    </p>
    <p>
        Kapasitas
        <input type="number" name="capacity" value="{{ old('capacity') }}"/>
    </p>
    <p>
        Tipe
        <input type="text" name="cruise_type" value="{{ old('cruise_type') }}"/>
    </p>
    <p>
        No. IMO
        <input type="number" name="imo_number" value="{{ old('imo_number') }}"/>
    </p>
    <p>
        Total Kapasitas
        <input type="number" name="total_capacity" value="{{ old('total_capacity') }}"/>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>