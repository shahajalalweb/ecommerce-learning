<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

    <h1>Edit Product</h1>

    <form action="{{ url('/Products/' . $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Product Name:</label>
            <input type="text" name="name" value="{{ $product->name }}">
        </div>

        <br>

        <div>
            <label>Price:</label>
            <input type="number" name="price" step="0.01" value="{{ $product->price }}">
        </div>

        <br>

        <div>
            <label>Description:</label>
            <textarea name="description">{{ $product->description }}</textarea>
        </div>

        <br>

        <button type="submit">Update Product</button>
    </form>

</body>
</html>