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
<form method="post" action="{{route('cruise.update', ['id' => $cruise->id])}}">

    <input type="hidden" name="_method" value="PUT">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Voyage Start
        <input type="date" name="voyage_number_start" value="{{date_format(date_create($cruise->voyage_number_start), 'Y-m-d')}}"/>
    </p>
    <p>
        Voyage End
        <input type="date" name="voyage_number_end" value="{{date_format(date_create($cruise->voyage_number_end), 'Y-m-d')}}"/>
    </p>
    <p>
        Kapasitas
        <input type="number" name="capacity" value="{{$cruise->capacity}}"/>
    </p>
    <p>
        Tipe
        <input type="text" name="cruise_type" value="{{$cruise->cruise_type}}"/>
    </p>
    <p>
        No. IMO
        <input type="number" name="imo_number" value="{{$cruise->imo_number}}"/>
    </p>
    <p>
        Total Kapasitas
        <input type="number" name="total_capacity" value="{{$cruise->total_capacity}}"/>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>