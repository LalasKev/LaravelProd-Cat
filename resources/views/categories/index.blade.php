<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <style>
          body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .navbar {
            background-color: #333;
            padding: 1rem;
            width: 100%;
            color: #fff;
            text-align: center;
        }

        .product-container {
            text-align: center;
            color: #333;
            width: 80%;
            margin-top: 20px;
        }

        h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 1rem;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }

        th {
            background-color: #e6e6e6;
            font-weight: bold;
        }

        td {
            text-align: left;
        }

        a {
            text-decoration: none;
            color: #3498db;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #2980b9;
        }

        button {
            background-color: transparent;
            border: none;
            color: #e74c3c;
            cursor: pointer;
            transition: color 0.3s ease-in-out;
        }

        button:hover {
            color: #c0392b;
        }
    </style>
</head>
<body>
    @include('navbar') 

    <div class="categories-container">
        <h1>Categories</h1>

        <table>
            <thead>
                <tr>
                    <th>Category Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="edit-link">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-link">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
