<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create Section!</h1>
    <div class="maindiv">
        <form action="{{route('products.store')}}" method="post">
            @csrf
            @method('post')

            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name">
            <label for="qty">Quantity</label>
            <input type="text" name="qty" placeholder="Quantity">
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="Price">
            <label for="description">Description</label>
            <input type="text" name="description" placeholder="Description">
            <button type="submit"> Submit </button>
        </form>
    </div>
</body>

</html>