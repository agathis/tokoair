<html>
<head>
    <title>Requisition - Catering Management System</title>
</head>
<body>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="post" action="{{route('requisition.create')}}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Number
        <input type="number" name="number" value="{{ old('number') }}"/>
    </p>
    <p>
        Voyage Planning
        <select name="voyage_planning">
            @foreach($voyage_plannings as $voyage_planning)
                <option value="{{$voyage_planning->id}}">{{$voyage_planning->crew_qty}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Date
        <input type="date" name="date" value="{{ old('date') }}"/>
    </p>
    <p>
        Total Amount
        <input type="number" name="total_amount" value="{{ old('total_amount') }}"/>
    </p>
    <p>
        Vendor
        <select name="vendor">
            @foreach($vendors as $vendor)
                <option value="{{$vendor->id}}">{{$vendor->name}}</option>
            @endforeach
        </select>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>