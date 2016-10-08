<html>
<head>
    <title>Voyage Class - Catering Management System</title>
</head>
<body>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="post" action="{{route('voyage-class.create')}}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Class
        <input type="text" name="class" value="{{ old('class') }}"/>
    </p>
    <p>
        Description
        <textarea style="resize: none" name="description"></textarea>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>