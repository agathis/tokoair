<html>
<head>
    <title>Requisition Item - Catering Management System</title>
</head>
<body>
@if(session('success'))
    {{session('success')}}
@endif
<a href="{{route('requisition-item.create')}}">Tambah Baru</a>
<table border="1" align="center">
    <thead>
    <th>Ingredient</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Requisition</th>
    <th>Unit</th>
    <th>Action</th>
    </thead>
    <tbody>
    @foreach($requisition_items as $requisition_item)
        <tr>
            <td>
                @foreach($ingredients as $ingredient)
                    @if($ingredient->id == $requisition_item->ingredient_id)
                        {{$ingredient->name}}
                    @endif
                @endforeach
            </td>
            <td>
                {{$requisition_item->quantity}}
            </td>
            <td>
                {{$requisition_item->price}}
            </td>
            <td>
                @foreach($requisitions as $requisition)
                    @if($requisition->id == $requisition_item->requisition_id)
                        {{$requisition->number}}
                    @endif
                @endforeach
            </td>
            <td>
                {{$requisition_item->unit}}
            </td>
            <td>
                <a href="{{route('requisition-item.update', ['id' => $requisition_item->id])}}">Update</a>
                <a href="{{route('requisition-item.delete', ['id' => $requisition_item->id])}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>