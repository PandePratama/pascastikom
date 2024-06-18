<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }
        .container h1 {
            margin-bottom: 1.5rem;
            color: #333;
        }
        .container form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .container input[type="text"],
        .container input[type="file"] {
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 100%;
        }
        .container button {
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
            margin-top: 0.5rem;
        }
        .container button:hover {
            background-color: #0056b3;
        }

        .btn {
            margin-top: 10px;
             border: none;
             cursor: pointer;
             background-color: red;
             width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <form method="POST" action="{{ route('submit') }}" enctype="multipart/form-data">
            @csrf
            <input type="text" id="name" name="name" placeholder="Title" required>
            <input type="file" id="file" name="file" required>
            <input type="text" id="text_data" name="text_data" placeholder="Summary" required>
            <input type="text" id="url" name="url" placeholder="Link" required>
            <button type="submit">Submit</button>
        </form>
        
        <a href="{{ url('/dashboard') }}" class="btn btn-success">
                            Kembali
                        </a>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
