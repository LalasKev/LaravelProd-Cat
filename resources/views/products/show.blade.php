<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .navbar {
            background-color: #333;
            padding: 1rem;
            width: 100%;
            color: #fff;
            text-align: center;
        }

        .filter-bar {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 1rem;
            background: linear-gradient(45deg, #3498db, #2ecc71);
        }

        .filter-form {
            display: flex;
            align-items: center;
        }

        .filter-label,
        .filter-select {
            margin-right: 1rem;
            padding: 0.5rem;
            border-radius: 5px;
            background-color: #fff;
            color: #3498db;
        }

        .filter-button {
            background-color: #fff;
            color: #3498db;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        .filter-button:hover {
            background-color: #3498db;
            color: #fff;
        }

        .product-card {
            border-bottom: 1px solid #ddd;
            margin-bottom: 2rem;
            padding: 1rem;
        }

        .product-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.5rem;
        }

        .product-details div {
            flex: 1;
        }

        .product-name {
            font-size: 1.5rem;
            font-weight: bold;
            color: #3498db;
        }

        .product-category {
            color: #555;
        }

        .product-price {
            font-size: 1.25rem;
            font-weight: bold;
            color: #3498db;
        }

        .product-description {
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            color: #333;
        }
    </style>
</head>
<body>
@include('navbar')
    <div class="filter-bar">
        <form action="{{ route('products.show') }}" method="get" class="filter-form">
            <label for="category" class="filter-label text-white">Filter by Category:</label>
            <select name="category" id="category" class="filter-select">
                <option value="" {{ empty(request('category')) ? 'selected' : '' }}>All Categories</option>
                @foreach($categories as $category)
                    <option value="{{ $category->name }}" {{ request('category') == $category->name ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <button type="submit" class="filter-button">Apply Filter</button>
        </form>
    </div>

    @foreach ($products as $product)
        <div class="product-card">
            <div class="product-details">
                <div>
                    <h1 class="product-name">{{ $product->name }}</h1>
                    <p class="product-category">{{ $product->category->name }}</p>
                </div>
                <div>
                    <p class="product-price">Price: ${{ $product->price }}</p>
                </div>
            </div>

            <div class="product-description">
                <p>{{ $product->description }}</p>
            </div>
        </div>
    @endforeach
</body>
</html>

