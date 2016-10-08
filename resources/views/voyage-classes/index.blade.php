<html>
<head>
    <title>Voyage Class - Catering Management System</title>
</head>
<body>
@if(session('success'))
    {{session('success')}}
@endif
<a href="{{route('voyage-class.create')}}">Tambah Baru</a>
<table border="1" align="center">
    <thead>
    <th>Class</th>
    <th>Description</th>
    <th>Action</th>
    </thead>
    <tbody>
    @foreach($voyage_classes as $voyage_class)
        <tr>
            <td>{{$voyage_class->class}}</td>
            <td>{{$voyage_class->description}}</td>
            <td>
                <a href="{{route('voyage-class.update', ['id' => $voyage_class->id])}}">Update</a>
                <a href="{{route('voyage-class.delete', ['id' => $voyage_class->id])}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>