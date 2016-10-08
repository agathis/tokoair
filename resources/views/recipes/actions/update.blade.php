<html>
<head>
    <title>Recipe - Catering Management System</title>
</head>
<body>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="post" action="{{route('recipe.update', ['id' => $recipe->id])}}" enctype="multipart/form-data">

    <input type="hidden" name="_method" value="PUT">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
        Title
        <input type="text" name="title" value="{{ $recipe->title }}"/>
    </p>
    <p>
        Picture
        <input type="file" name="picture" />
    </p>
    <p>
       @if(!empty($recipe->picture) || $recipe->picture != NULL)
            <img src="/uploads{{$recipe->picture}}">
           @else
            No Image
        @endif
           <input type="hidden" name="previous_picture" value="{{ $recipe->picture }}"/>
    </p>
    <p>
        Description
        <textarea style="resize: none" name="description">{{$recipe->description}}</textarea>
    </p>
    <p>
        Direction
        <input type="text" name="direction" value="{{ $recipe->direction }}"/>
    </p>
    <p>
        Meals Planning
        <input type="number" name="meals_planning_id" value="{{ $recipe->meals_planning_id }}"/>
    </p>
    <p>
        Voyage Planning
        <input type="number" name="voyage_planning_id" value="{{ $recipe->voyage_planning_id }}"/>
    </p>
    <p>
        Menu Type
        <input type="text" name="menu_type" value="{{ $recipe->menu_type }}"/>
    </p>
    <p>
        <input type="submit" name="submit"/>
    </p>
</form>
</body>
</html>