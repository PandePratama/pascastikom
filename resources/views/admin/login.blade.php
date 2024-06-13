<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 320px;
            text-align: center;
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .login-container button {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            box-sizing: border-box;
        }
        .login-container button:hover {
            background-color: #0056b3;
        }
        .login-container .error-message {
            color: #ff0000;
            text-align: center;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <input type="text" name="email" placeholder="Email" value="" required>
            <input type="password" name="password" placeholder="Password" value="" required>
            <button type="submit">Login</button>
        </form>
        @if($errors->any())
            <div class="error-message">
                <strong>{{ $errors->first() }}</strong>
            </div>
        @endif
    </div>
</body>
</html>
