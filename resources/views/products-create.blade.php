<!DOCTYPE html>
<html>

<head>
    <title>Create Product</title>
</head>

<body>
    <h1>Add New Product</h1>
    <!-- error msg  -->
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ url('/Products/store') }}" method="POST">
        @csrf
        <div>
            <label>Product Name:</label>
            <input type="text" name="name" value="{{ old('name') }}">
            <!-- filed error  -->
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <br>
        <div>
            <label>Price:</label>
            <input type="number" name="price" step="0.01" value="{{ old('price') }}">
            <!-- filed error  -->
            @error('price')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <br>
        <div>
            <label>Description:</label>
            <textarea name="description">{{ old('description') }}</textarea>
            <!-- filed error  -->
            @error('description')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <br>
        <button type="submit">Save Product</button>
    </form>
</body>

</html>