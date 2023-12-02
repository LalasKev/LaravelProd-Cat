<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #4a5568;
            color: #2d3748;
        }

        .navbar {
            background-color: #333;
            padding: 1rem;
            width: 100%;
            color: #fff;
            text-align: center;
        }

        .welcome-container {
            text-align: center;
            padding: 5rem 2rem; /* Adjusted padding for content */
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 80px; /* Added margin-top to avoid content being overlapped by fixed navbar */
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #4a5568;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.25rem;
            color: #718096;
            line-height: 1.5;
        }

        a {
            color: #2b6cb0;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #2c5282;
        }
    </style>
</head>
<body>
    @include('navbar')

    <div class="welcome-container">
        <h1>Hello Madam, Sir</h1>
        <p>"I'm currently uncertain about the specific content or data to showcase here. As a solution, I've incorporated filters and additional functionalities within the 'Show Products' section of the navigation bar." <a href="{{ route('products.show') }}" class="underline">Show Products</a> section of the navigation bar.</p>
    </div>
</body>
</html>


