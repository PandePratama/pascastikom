<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: contents;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
            margin: 0;
        }
        .container {
            margin-top: 20px;
        }
        .exit {
            margin-left: 150px;
            margin-top: 10px;
            margin-bottom: 30px;
            
        }
    </style>
</head>
<body>
    
<div class="container">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $item)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->text_data }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $item->file_path) }}" alt="Image" width="50" class="img-thumbnail" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{ asset('storage/' . $item->file_path) }}">
                    </td>
                    <td>
                        <a href="{{ url('/update') }}" class="btn btn-success">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a href="{{ url('/delete') }}" class="btn btn-primary">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" src="" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<script>
    var imageModal = document.getElementById('imageModal');
    imageModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var imageUrl = button.getAttribute('data-bs-image');
        var modalImage = imageModal.querySelector('#modalImage');
        modalImage.src = imageUrl;
    });
</script>

<form method="POST" action="{{ route('logout') }}" class="exit">
            @csrf
            <button>Logout</button>
    </form>

    <td>
                        <a href="{{ url('/update') }}" class="btn btn-success">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a href="{{ url('/delete') }}" class="btn btn-primary">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
