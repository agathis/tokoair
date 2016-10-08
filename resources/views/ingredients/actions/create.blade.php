<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Ingredient - Catering Management System</title>
</head>
<body>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="post" action="{{route('ingredient.create')}}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Nama
        <input type="text" name="name" value="{{ old('name') }}"/>
    </p>
    <p>
        Kategori
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->category}}</option>
            @endforeach
        </select>
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