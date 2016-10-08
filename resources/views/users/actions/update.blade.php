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
<form method="post" action="{{route('user.update', ['id' => $user->id])}}">

    <input type="hidden" name="_method" value="PUT">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Username
        <input type="text" name="username" value="{{ $user->username }}"/>
    </p>
    <p>
        Password (For authentication only, not for changed)
        <input type="password" name="password" value="{{ old('password') }}"/>
    </p>
    <p>
        Role
        <select name="role">
            @foreach($roles as $row)
                @foreach($role_users as $role_user)
                    <option value="{{$row->id}}" @if($row->id == $role_user->id) selected @endif>{{$row->name}}</option>
                    @endforeach
            @endforeach
        </select>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>