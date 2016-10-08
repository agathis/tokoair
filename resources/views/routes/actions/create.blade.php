<html>
<head>
    <title>Route - Catering Management System</title>
</head>
<body>
@if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif
    <form method="post" action="{{route('route.create')}}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <p>
            Port Origin
            <select name="port_origin">
                @foreach($ports as $port)
                    <option value="{{$port->id}}">{{$port->name}}</option>
                    @endforeach
            </select>
        </p>
        <p>
            Port Destination
            <select name="port_destination">
                @foreach($ports as $port)
                    <option value="{{$port->id}}">{{$port->name}}</option>
                @endforeach
            </select>
        </p>
    <p>
        Trip Duration
        <input type="number" name="eta" value="{{ old('eta') }}"/>
    </p>
        <p>
            <input type="submit" name="submit"/>
        </p>
    </form>
</body>
</html>