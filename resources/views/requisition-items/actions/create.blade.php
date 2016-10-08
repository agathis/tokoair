<html>
<head>
    <title>Requisition Item - Catering Management System</title>
</head>
<body>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="post" action="{{route('requisition-item.create')}}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Ingredient
        <select name="ingredient">
            @foreach($ingredients as $ingredient)
                <option value="{{$ingredient->id}}">{{$ingredient->name}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Quantity
        <input type="number" name="quantity" value="{{ old('quantity') }}"/>
    </p>
    <p>
        Price
        <input type="number" name="price" value="{{ old('price') }}"/>
    </p>
    <p>
        Requisition
        <select name="requisition">
            @foreach($requisitions as $requisition)
                <option value="{{$requisition->id}}">{{$requisition->number}}</option>
            @endforeach
        </select>
    </p>
    <p>
       Unit
        <input type="text" name="unit" value="{{ old('unit') }}"/>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>