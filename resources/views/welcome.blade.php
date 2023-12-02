<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Categories and Products</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, #74ebd5, #acb6e5);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 80%;
            max-width: 600px;
        }

        .title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            cursor: pointer;
            color: #4f46e5;
        }

        .title:hover {
            color: #ff66b2;
            transform: rotate(360deg);
        }

        .options {
            margin-top: 1.5rem;
        }

        .button {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            margin: 0 10px;
            display: inline-block;
            border: 2px solid transparent;
        }

        .button:hover {
            background-color: #4b5563;
            border-color: #4b5563;
        }

        .button.products {
            background-color: #4f46e5;
            color: #fff;
        }

        .button.categories {
            background-color: #ff6b6b;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">CRUD Categories and Products</h1>

        <div class="options">
            <a href="{{ route('products.index') }}" class="button products">Explore Products</a>
            <a href="{{ route('categories.index') }}" class="button categories">Discover Categories</a>
        </div>
    </div>
</body>
</html>

