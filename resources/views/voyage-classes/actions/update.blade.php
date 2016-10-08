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
<form method="post" action="{{route('voyage-class.update', ['id' => $voyage_class->id])}}">

    <input type="hidden" name="_method" value="PUT">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Class
        <input type="text" name="class" value="{{ $voyage_class->class }}"/>
    </p>
    <p>
        Description
        <textarea style="resize: none" name="description">{{ $voyage_class->description }}</textarea>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>