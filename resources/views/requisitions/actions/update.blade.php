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
<form method="post" action="{{route('requisition.update', ['id' => $requisition->id])}}">

    <input type="hidden" name="_method" value="PUT">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Number
        <input type="number" name="number" value="{{ $requisition->number }}"/>
    </p>
    <p>
        Voyage Planning
        <select name="voyage_planning">
            @foreach($voyage_plannings as $voyage_planning)
                <option value="{{$voyage_planning->id}}" @if($voyage_planning->id == $requisition->voyage_planning_id) selected @endif>{{$voyage_planning->crew_qty}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Date
        <input type="date" name="date" value="{{ date_format(date_create($requisition->date), 'Y-m-d') }}"/>
    </p>
    <p>
        Total Amount
        <input type="number" name="total_amount" value="{{ $requisition->total_amount }}"/>
    </p>
    <p>
        Vendor
        <select name="vendor">
            @foreach($vendors as $vendor)
                <option value="{{$vendor->id}}" @if($vendor->id == $requisition->vendor_id) selected @endif>{{$vendor->name}}</option>
            @endforeach
        </select>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>