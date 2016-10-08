<html>
<head>
    <title>Recipe - Catering Management System</title>
</head>
<body>
@if(session('success'))
    {{session('success')}}
@endif
<a href="{{route('recipe.create')}}">Tambah Baru</a>
<table border="1" align="center">
    <thead>
    <th>Judul</th>
    <th>Gambar</th>
    <th>Deskripsi</th>
    <th>Direction</th>
    <th>Tipe Menu</th>
    <th>Action</th>
    </thead>
    <tbody>
    @foreach($recipes as $recipe)
        <tr>
            <td>{{$recipe->title}}</td>
            <td>
                @if(!empty($recipe->picture) || $recipe->picture != NULL)
                    <img src="/uploads{{$recipe->picture}}">
                @else
                    No Image
                @endif
            </td>
            <td>{{$recipe->description}}</td>
            <td>{{$recipe->direction}}</td>
            <td>{{$recipe->menu_type}}</td>
            <td>
                <a href="{{route('recipe.update', ['id' => $recipe->id])}}">Update</a>
                <a href="{{route('recipe.delete', ['id' => $recipe->id])}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>