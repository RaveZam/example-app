<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit {{$product->name}}</h1>
    <a href="{{route('products.index')}}">Return To Index</a>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors as $error )
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div>
        <form method="post" action="{{route('products.update', ['product' => $product])}}">
            @csrf
            @method('put')
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$product->name}}">
            <label for=" qty">Quantity</label>
            <input type="text" name="qty" value="{{$product->qty}}">
            <label for=" price">Price</label>
            <input type="text" name="price" value="{{$product->price}}">
            <label for=" description">Description</label>
            <input type="text" name="description" value="{{$product->description}}">
            <button type=" submit"> Update </button>
        </form>
    </div>
</body>

</html>