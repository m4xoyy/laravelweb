<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Laravel App</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5); /* Gradient background */
            padding: 40px;
            margin: 0;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 40px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            border-radius: 12px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        a.button, form button.button {
            background: linear-gradient(to right, #00b09b, #96c93d);
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            display: inline-block;
            transition: background 0.3s ease;
        }

        a.button:hover, form button.button:hover {
            background: linear-gradient(to right, #00a087, #85b832);
        }

        .edit-btn {
            background: linear-gradient(to right, #4facfe, #00f2fe);
        }

        .edit-btn:hover {
            background: linear-gradient(to right, #3e8ef7, #00e0e0);
        }

        .delete-btn {
            background: linear-gradient(to right, #f85032, #e73827);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .delete-btn:hover {
            background: linear-gradient(to right, #dd2c00, #b71c1c);
        }

        .success-message {
            color: green;
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
        }

        .error-message {
            color: red;
            margin-bottom: 12px;
            font-weight: bold;
        }

        label {
            font-weight: 600;
            display: block;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 14px;
            margin-bottom: 18px;
            border: 1.5px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            height: 38px;
            box-sizing: border-box;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li.post-item {
            margin-bottom: 20px;
            padding: 16px;
            border-bottom: 1px solid #eee;
        }

        .actions {
            margin-top: 10px;
        }

        form {
            display: inline;
        }

        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
