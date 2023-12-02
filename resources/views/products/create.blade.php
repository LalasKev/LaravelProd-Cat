<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 320px;
        }

        .form-container h1 {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #333;
        }

        .form-container label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
            color: #555;
        }

        .form-container input,
        .form-container textarea,
        .form-container select {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-container button {
            background-color: #4f46e5;
            color: #fff;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .form-container button:hover {
            background-color: #3c358c;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Create Product</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <label for="name">Product Name</label>
            <input type="text" id="name" name="name" placeholder="Enter product name" required>

            <label for="price">Product Price</label>
            <input type="number" id="price" name="price" placeholder="Enter product price" required>

            <label for="description">Product Description</label>
            <textarea id="description" name="description" rows="3" placeholder="Enter product description"></textarea>

            <label for="category_id">Category</label>
            <select id="category_id" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <button type="submit">Create Product</button>
        </form>
    </div>
</body>
</html>