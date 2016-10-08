<html>
<head>
    <title>Menu - Catering Management System</title>
</head>
<body>
@if(session('success'))
    {{session('success')}}
@endif
<a href="{{route('menu.create')}}">Tambah Baru</a>
<table border="1" align="center">
    <thead>
    <th>Nama</th>
    <th>Appetizer</th>
    <th>Main Dish</th>
    <th>Dessert</th>
    <th>Beverage</th>
    <th>Type</th>
    <th>Action</th>
    </thead>
    <tbody>
    @foreach($menus as $menu)
        <tr>
            <td>
                {{$menu->name}}
            </td>
            <td>
                @foreach($recipes as $recipe)
                    @if($recipe->id == $menu->appetizer)
                        {{$recipe->title}}
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($recipes as $recipe)
                    @if($recipe->id == $menu->main_dish)
                        {{$recipe->title}}
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($recipes as $recipe)
                    @if($recipe->id == $menu->dessert)
                        {{$recipe->title}}
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($recipes as $recipe)
                    @if($recipe->id == $menu->beverage)
                        {{$recipe->title}}
                    @endif
                @endforeach
            </td>
            <td>{{$menu->type}}</td>
            <td>
                <a href="{{route('menu.update', ['id' => $menu->id])}}">Update</a>
                <a href="{{route('menu.delete', ['id' => $menu->id])}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>