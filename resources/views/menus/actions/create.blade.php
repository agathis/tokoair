<html>
<head>
    <title>Menu - Catering Management System</title>
</head>
<body>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="post" action="{{route('menu.create')}}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Nama
        <input type="text" name="name" value="{{ old('name') }}"/>
    </p>
    <p>
        Appetizer
        <select name="appetizer">
            @foreach($recipes as $recipe)
                <option value="{{$recipe->id}}">{{$recipe->title}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Main Dish
        <select name="main_dish">
            @foreach($recipes as $recipe)
                <option value="{{$recipe->id}}">{{$recipe->title}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Dessert
        <select name="dessert">
            @foreach($recipes as $recipe)
                <option value="{{$recipe->id}}">{{$recipe->title}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Beverage
        <select name="beverage">
            @foreach($recipes as $recipe)
                <option value="{{$recipe->id}}">{{$recipe->title}}</option>
            @endforeach
        </select>
    </p>
    <p>
        Type
        <input type="text" name="type" value="{{ old('type') }}"/>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>