<html>
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
<form method="post" action="{{route('ingredient.update', ['id' => $ingredient->id])}}">

    <input type="hidden" name="_method" value="PUT">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Nama
        <input type="text" name="name" value="{{ $ingredient->name }}"/>
    </p>
    <p>
        Kategori
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{$category->id}}" @if($category->id == $ingredient->category_id) selected @endif>{{$category->category}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Description
        <textarea style="resize: none" name="description">{{$ingredient->description}}</textarea>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>