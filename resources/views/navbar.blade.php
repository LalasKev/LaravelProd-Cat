<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .navbar {
            background: linear-gradient(45deg, #4f46e5, #ff6b6b);
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-list {
            list-style: none;
            display: flex;
            space-between: 1rem;
        }

        .nav-list li {
            margin-right: 1rem;
        }

        .nav-link {
            text-decoration: none;
            color: #fff;
            font-size: 1rem;
            transition: color 0.3s ease-in-out;
            border-radius: 5px;
            padding: 0.5rem 1rem;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <ul class="nav-list flex space-x-6 text-white">
            <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li><a href="{{ route('products.index') }}" class="nav-link">Products</a></li>
            <li><a href="{{ route('categories.index') }}" class="nav-link">Categories</a></li>
            <li><a href="{{ route('products.create') }}" class="nav-link">Create Product</a></li>
            <li><a href="{{ route('categories.create') }}" class="nav-link">Create Categories</a></li>
        </ul>

        <ul class="nav-list flex space-x-4 text-white justify-end">
            <li><a href="{{ route('products.show') }}" class="nav-link">Show Products</a></li>
            <li><a href="{{ route('categories.show') }}" class="nav-link">Show categories</a></li>
        </ul>
    </div>
</body>
</html>
