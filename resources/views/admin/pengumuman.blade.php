<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/img/pasca.png" type="image/x-icon">
    <title>Pengumuman</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 1200px;
            height: 90vh;
            overflow: hidden;
            margin-top: 60px; /* Adjust this value to add space for the navbar */
        }

        .table-container {
            margin-top: 40px;
            height: calc(100% - 140px); /* adjust based on other content height */
            overflow-y: auto;
        }

        .exit {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .btn {
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 16px;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .table thead th {
            position: sticky;
            top: 0;
            background-color: #fff;
            z-index: 1;
            box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.1);
        }

        .img-thumbnail {
            cursor: pointer;
        }

        .header_tabel {
            text-align: left;
        }

        .btn-delete {
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark w-100" style="background-color: #101f6a;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/about') }}">
                <img src="img/LogoITB.png" width="163" height="45" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Empty list for spacing -->
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">Media</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/pengumuman') }}">Pengumuman</a>
                    </li>
                </ul>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- resources/views/pengumuman.blade.php -->
    <div id="dashboard" class="container">
        <h2 class="text-center mb-4">Pengumuman</h2>
        <div class="table-container">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="header_tabel">
                        <th scope="col">No</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Tautan File</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengumuman as $index => $item)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $item->text_data }}</td>
                            <td><a href="{{ $item->url }}" target="_blank">{{ $item->url }}</a></td>
                            <td>
                                <form method="POST" action="{{ route('delete_pengumuman', $item->id) }}" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="action-buttons">
            <a href="{{ url('/update_pengumuman') }}" class="btn btn-success">
                <i class="bi bi-pencil"></i> Update
            </a>
        </div>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
