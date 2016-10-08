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
<form method="post" action="{{route('requisition-item.update', ['id' => $requisition_item->id])}}">

    <input type="hidden" name="_method" value="PUT">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Ingredient
        <select name="ingredient">
            @foreach($ingredients as $ingredient)
                <option value="{{$ingredient->id}}" @if($ingredient->id == $requisition_item->ingredient_id) selected @endif>{{$ingredient->name}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Quantity
        <input type="number" name="quantity" value="{{ $requisition_item->quantity }}"/>
    </p>
    <p>
        Price
        <input type="number" name="price" value="{{ $requisition_item->price }}"/>
    </p>
    <p>
        Requisition
        <select name="requisition">
            @foreach($requisitions as $requisition)
                <option value="{{$requisition->id}}" @if($requisition->id == $requisition_item->requisition_id) selected @endif>{{$requisition->number}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Unit
        <input type="text" name="unit" value="{{ $requisition_item->unit }}"/>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>