<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Laravel App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        a.button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
            display: inline-block;
        }

        a.button:hover {
            background-color: #45a049;
        }

        .edit-btn {
            background-color: #007bff;
        }

        .edit-btn:hover {
            background-color: #0069d9;
        }

        .delete-btn {
            background-color: #dc3545;
            border: none;
            color: white;
            padding: 10px 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }

        .success-message {
            color: green;
            margin-bottom: 20px;
            font-weight: bold;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li.post-item {
            margin-bottom: 20px;
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        .actions {
            margin-top: 10px;
        }

        form {
            display: inline;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
