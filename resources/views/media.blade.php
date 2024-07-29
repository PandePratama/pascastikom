<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .text-truncate-ellipsis {
            display: -webkit-box;
            -webkit-line-clamp: 3; /* Jumlah baris yang diizinkan */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            max-height: 5em; /* Sesuaikan dengan tinggi baris */
        }
    </style>
    <title>Media</title>
</head>
<body>
    <!-- navbar -->
    <x-navbar></x-navbar>

    <div class="container">
        <div class="row justify-content-center">
            @foreach($data as $media)
            <div class="col-md-6 col-lg-4 mb-1 mt-2 pr-0">
                <div class="card" style="display: flex; flex-direction: row; align-items: flex-start; height: 17rem;">
                    <img src="{{ asset('storage/' . $media->file_path) }}" class="card-img-top img-fluid" alt="..." style="width: 50%; height:auto; object-fit:cover;">
                    <div class="card-body" style="display:flex; flex-direction:column; justify-content:center;width:50%; padding:0;">
                        <h5 class="card-title" style="font-size: medium;">{{ $media->name }}</h5>
                        <p class="text-truncate-ellipsis" style="font-size: small;">{{ $media->text_data }}</p>
                        <a href="{{ $media->url }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- footer -->
    <x-footer></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>