<html>
<head>
    <title>User - Catering Management System</title>
</head>
<body>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="post" action="{{route('user.create')}}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Username
        <input type="text" name="username" value="{{ old('username') }}"/>
    </p>
    <p>
        Password
        <input type="password" name="password" value="{{ old('password') }}"/>
    </p>
    <p>
        Role
        <select name="role">
            @foreach($role as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
            @endforeach
        </select>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>