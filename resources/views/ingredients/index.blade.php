<html>
<head>
    <title>Ingredient - Catering Management System</title>
</head>
<body>
@if(session('success'))
    {{session('success')}}
@endif
<a href="{{route('ingredient.create')}}">Tambah Baru</a>
<table border="1" align="center">
    <thead>
    <th>Nama</th>
    <th>Kategori</th>
    <th>Description</th>
    <th>Action</th>
    </thead>
    <tbody>
    @foreach($ingredients as $ingredient)
        <tr>
            <td>
                {{$ingredient->name}}
            </td>
            <td>
                @foreach($categories as $category)
                    @if($category->id == $ingredient->category_id)
                        {{$category->category}}
                    @endif
                @endforeach
            </td>
            <td>{{$ingredient->description}}</td>
            <td>
                <a href="{{route('ingredient.update', ['id' => $ingredient->id])}}">Update</a>
                <a href="{{route('ingredient.delete', ['id' => $ingredient->id])}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>