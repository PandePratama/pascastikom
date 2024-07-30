<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <style>
        .text-justify {
            text-align: justify;
        }
        th.w-25 {
            width: 25%;
        }

    </style>
</head>

<body>
    <x-navbar></x-navbar>

    <!-- Sambutan -->
    <div class="container mt-5" id="sambutan">
        <div class="row d-flex align-items-stretch">
            <div class="col-sm-4 d-flex align-items-center justify-content-center">
                <div class="card-borderless" style="width: 25rem;">
                    <img src="/img/3.jpg" class="card-img-top" style="border-radius:20px;" alt="direktur">
                    <div class="card-body mb-1">
                        <p class="card-text text-center"><b>Direktur Pascasarjana <br>ITB STIKOM Bali</b><br>Dr. Dandy Pramana Hostiadi, S.Kom., M.T</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <section>
                    <div>
                        <div>
                            <h2 id="sejarah" class="mt-3 text-center">Sambutan Direktur Pascasarjana</h2>
                            <p class="content-paragraph justify mx-3 mx-md-5 text-justify" style="font-size: large;">
                                Selamat datang di website Program Pascasarjana ITB STIKOM Bali. Program Pascasarjana ITB STIKOM Bali menawarkan program studi unggulan, yaitu: <br>
                                <br>
                                <b>Program Studi (S2) Sistem Informasi</b> <br>
                                Saat ini, Program Magister kami menawarkan empat bidang konsentrasi yang relevan dengan kebutuhan industri, yaitu: 
                                <div class="konsen ml-5">
                                    <ul>
                                        <li>Cyber Security</li>
                                        <li>Data Science</li>
                                        <li>Enterprise System</li>
                                        <li>Medical Informatic</li>
                                    </ul>
                                </div>
                                <p class="content-paragraph justify mx-3 mx-md-5 text-justify" style="font-size: large;">Untuk mendukung proses pembelajaran, kami menyediakan fasilitas perkuliahan online melalui platform e-learning yang dapat diakses dengan mudah oleh seluruh mahasiswa.</p>
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Isi -->
    <div class="judul text-center mt-5 mb-5" id="informasi">
        <h1>S2 Sistem Informasi</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="font-size: large;">
                <table class="table table-borderless">
                    <tbody class="text-justify">
                        <tr>
                            <th scope="row" class="w-25">Ketua Program Studi</th>
                            <td>Dr. Dandy Pramana Hostiadi, S.Kom., M.T.</td>
                        </tr>
                        <tr>
                            <th scope="row">Sekretaris Program Studi</th>
                            <td>I Gusti Ayu Nandia Lestari, S.Kom., M.Kom</td>
                        </tr>
                        <tr>
                            <th scope="row">Gelar Lulusan</th>
                            <td>Magister Komputer (M.Kom.)</td>
                        </tr>
                        <tr>
                            <th scope="row">Visi</th>
                            <td>Menjadi pascasarjana pada bidang sistem informasi berkualitas internasional berbasis intelligent dan secure system pada tahun 2030.</td>
                        </tr>
                        <tr>
                            <th scope="row">Misi</th>
                            <td>
                                <ul>
                                    <li>Menyelenggarakan pendidikan magister di bidang sistem informasi berbasis intelligent dan secure system bagi para mahasiswa agar mampu menjadi sumber daya manusia handal, unggul dan berkualitas serta diakui secara internasional guna mendukung sektor ekonomi, pariwisata, pemerintahan dan perusahaan.</li><br>
                                    <li>Menyelenggarakan penelitian dan pengembangan ilmu pengetahuan dibidang Sistem Informasi yang memberikan dampak pada kemajuan disiplin akademik dan professional internasional.</li><br>
                                    <li>Mendorong dan memfasilitasi sivitas akademika untuk melakukan pengabdian kepada masyarakat secara profesional</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Profil Lulusan</th>
                            <td>
                                <ul>
                                    <li>Mampu menguasai teori dalam domain Sistem Informasi, berbasis Intelligence dan Secure System</li><br>
                                    <li>Mampu menganalisis permasalahan pada bidang pengetahuan, teknologi dan seni menggunakan metodologi ilmiah dalam domain sistem informasi</li><br>
                                    <li>Mampu memecahkan permasalahan melalui penelitian dibidang sistem informasi dalam bentuk riset dan pengembangan yang bermanfaat bagi masyarakat dan keilmuan serta diakui secara nasional dan internasional</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Pilihan Kelas</th>
                            <td>Reguler</td>
                        </tr>
                        <tr>
                            <th scope="row">Durasi Program</th>
                            <td>4 semester</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <x-footer></x-footer>

    <!-- Initialize AOS -->
    <script>
        AOS.init();
    </script>
</body>

</html>
