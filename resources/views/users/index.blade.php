<html>
<head>
    <title>User - Catering Management System</title>
</head>
<body>
@if(session('success'))
    {{session('success')}}
@endif
@if(session('failed'))
    {{session('failed')}}
@endif
<a href="{{route('user.create')}}">Tambah Baru</a>
<table border="1" align="center">
    <thead>
    <th>Username</th>
    <th>Role</th>
    <th>Dibuat Tanggal</th>
    <th>Action</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>
                {{$user->username}}
            </td>
            <td>
                @foreach($role_users as $role_user)
                    @foreach($roles as $role)
                        @if($user->id == $role_user->user_id && $role->id == $role_user->role_id)
                            {{$role->name}}
                        @endif
                        @endforeach
                @endforeach
            </td>
            <td>{{date_format(date_create($user->created_at),'d-m-Y')}}</td>
            <td>
                <a href="{{route('user.update', ['id' => $user->id])}}">Update</a>
                <a href="{{route('user.delete', ['id' => $user->id])}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>