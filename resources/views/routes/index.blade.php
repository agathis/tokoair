<html>
<head>
    <title>Route - Catering Management System</title>
</head>
<body>
    @if(session('success'))
        {{session('success')}}
        @endif
    <a href="{{route('route.create')}}">Tambah Baru</a>
    <table border="1" align="center">
        <thead>
            <th>Asal</th>
            <th>Tujuan</th>
            <th>Lama Perjalanan (Hari)</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach($routes as $route)
            <tr>
                <td>
                    @foreach($ports as $port)
                    @if($port->id == $route->port_origin)
                        {{$port->name}}
                        @endif
                        @endforeach
                </td>
                <td>
                    @foreach($ports as $port)
                        @if($port->id == $route->port_destination)
                            {{$port->name}}
                        @endif
                    @endforeach
                </td>
                <td>{{$route->eta}}</td>
                <td>
                    <a href="{{route('route.update', ['id' => $route->id])}}">Update</a>
                    <a href="{{route('route.delete', ['id' => $route->id])}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>