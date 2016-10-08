<html>
<head>
    <title>Cruise - Catering Management System</title>
</head>
<body>
@if(session('success'))
    {{session('success')}}
@endif
<a href="{{route('cruise.create')}}">Tambah Baru</a>
<table border="1" align="center">
    <thead>
    <th>Voyage Start</th>
    <th>Voyage End</th>
    <th>Kapasitas</th>
    <th>Tipe</th>
    <th>No. IMO</th>
    <th>Total Kapasitas</th>
    <th>Action</th>
    </thead>
    <tbody>
    @foreach($cruises as $cruise)
        <tr>
            <td>
                {{date_format(date_create($cruise->voyage_number_start), 'd-m-Y')}}
            </td>
            <td>
                {{date_format(date_create($cruise->voyage_number_end), 'd-m-Y')}}
            </td>
            <td>{{$cruise->capacity}}</td>
            <td>{{$cruise->cruise_type}}</td>
            <td>{{$cruise->imo_number}}</td>
            <td>{{$cruise->total_capacity}}</td>
            <td>
                <a href="{{route('cruise.update', ['id' => $cruise->id])}}">Update</a>
                <a href="{{route('cruise.delete', ['id' => $cruise->id])}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>