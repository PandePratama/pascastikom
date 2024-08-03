<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Pengumuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }
        .btn-custom {
            background-color: #0d6efd;
            color: white;
        }
        .btn-custom:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1 class="card-title text-center mb-4">Update Pengumuman</h1>
            <form method="POST" action="{{ route('submit2') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="text_data" class="form-label">Deskripsi</label>
                    <input type="text" id="text_data" name="text_data" class="form-control" placeholder="Masukkan deskripsi" required>
                </div>
                <div class="mb-3">
                    <label for="url" class="form-label">Link</label>
                    <input type="text" id="url" name="url" class="form-control" placeholder="Masukkan link" required>
                </div>
                <button type="submit" class="btn btn-custom w-100">Submit</button>
            </form>
            <a href="{{ url('/pengumuman') }}" class="btn btn-success mt-3 w-100">
                Kembali
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

