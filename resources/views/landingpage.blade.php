<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/stylelogin.css">
    <title>Home</title>
    <style>
        .custom-section {
            position: relative;
            padding: 60px 20px 40px 60px;
            /* Padding for responsiveness */
        }

        .corner-image {
            position: absolute;
            width: 150px;
            /* Responsive width */
            height: 150px;
            /* Responsive height */
        }

        .top-left {
            top: 60px;
            left: 0;
            transform: rotate(180deg);
        }

        .bottom-right {
            bottom: 20px;
            right: 0;
        }

        @media (min-width: 768px) {
            .corner-image {
                width: 300px;
                /* Larger width for larger screens */
                height: 300px;
                /* Larger height for larger screens */
            }

            .top-left {
                top: 0px;
                /* Adjusted for larger screens */
            }

            .bottom-right {
                bottom: 70px;
                /* Adjusted for larger screens */
            }
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <x-navbar></x-navbar>

    <!-- Start Content -->
    <section class="container-fluid textColorPrimary custom-section">
        <img src="img/ornamen.png" alt="Corner Image" class="corner-image top-left">
        <div class="row align-items-center"> <!-- Changed "align-center" to "align-items-center" for proper alignment -->
            <div class="col-md-6">
                <div class="row mb-3">
                    <div class="col text-end">
                        <img src="img/pasca.png" alt="Logo ITB" class="img-fluid" width="120">
                    </div>
                    <div class="col text-start align-items-center">
                        <img src="img/kampusmerdeka.png" alt="Kampus Merdeka" class="img-fluid" width="163">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <h3>Program Pascasarjana</h3>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <h1>MAGISTER KOMPUTER (S2) PROGRAM STUDI SISTEM INFORMASI</h1>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <p>Institut Teknologi & Bisnis (ITB) STIKOM Bali<br>Nomor Akreditasi: 3316/SK/BAN-PT/Ak.P/M/VIII/2023</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-danger mb-2">Daftar Sekarang</button>
                        <button type="button" class="btn btn-danger mb-2">Login</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="img/gedung2.png" alt="Image" class="img-fluid">
            </div>
        </div>
        <img src="img/ornamen.png" alt="Corner Image" class="corner-image bottom-right">
    </section>
    <!-- End Content -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc7J4/q/2lc7WhQnMf0SvhEccFNYsWq2Lc7J4/qc/U" crossorigin="anonymous"></script>
</body>

</html>