<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1><a href="{{ url('/Products/create') }}">Add New Product</a>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }} - BDT {{ $product->price }} - {{ $product->description }} - 
                <a href="{{ url('/Products/' . $product->id . '/edit') }}">Edit</a>   
                <form action="{{ url('/products/' . $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>




</body>
</html>