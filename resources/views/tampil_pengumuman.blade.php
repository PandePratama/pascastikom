<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Tampil Pengumuman</title>
</head>

<body>

<x-navbar></x-navbar>

<div id="akreditasi" class="container mt-4 content">
  <h2 class="text-center py-1">Pengumuman</h2>
  <ul class="py-2" style="margin-bottom: 170px; padding-left: 165px; padding-right: 165px;">
    @foreach ($pengumuman as $item)
      <li class="py-2">
        <a href="{{ $item->url }}" target="_blank">{{ $item->text_data }}</a>
      </li>
    @endforeach
  </ul>
</div>

<x-footer></x-footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
