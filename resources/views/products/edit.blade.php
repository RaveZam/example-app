<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit {{$product->name}}</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors as $error )
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div class="maindiv">
        <form action="" method="post">
            @csrf
            @method('post')
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="{{$product->name}}">
            <label for="qty">Quantity</label>
            <input type="text" name="qty" placeholder="{{$product->qty}}">
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="{{$product->price}}">
            <label for="description">Description</label>
            <input type="text" name="description" placeholder="{{$product->description}}">
            <button type="submit"> Update </button>
        </form>
    </div>
</body>

</html>