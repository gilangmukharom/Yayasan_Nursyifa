<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Yayasan Nursyifa</title>
</head>

<body>
    <div id="imageModal" class="modal">
        <span class="close" onclick="closeImageModal()">&times;</span>
        <img id="modalImage" src="" alt="Gambar">
    </div>

    <nav class="header">
        <div class="content_header">
            <div class="image_logo">
                <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="">
            </div>
            <p>Yayasan Nur Assyifa - Samarinda - Kalimantan Timur</p>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo base_url('/') ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo base_url('/about') ?>">Profile</a></li>
                            <li><a class="dropdown-item" href="#struktur_organisasi">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="#visi_misi">Visi-Misi</a></li>
                            <li><a class="dropdown-item" href="#program_kerja">Program Kerja</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gallery
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#activity">Foto Kegiatan</a></li>
                            <li><a class="dropdown-item" href="#">Sumbangsih</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Keanggotaan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#joinqr">Cara Berpartisipasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#footer">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="about_content">
        <div class="bg_about">
            <div class="overlay_bg"></div>
            <img src="<?= base_url('assets/images/bg.jpg') ?>" alt="">
        </div>
        <div class="tittle_content_about">
            <h1 class="tittle_about">Gallery</h1>
        </div>

        <div class="container_gallery">
            <?php foreach ($tampil as $k) : ?>
                <div class="gallery_content">
                    <img src="<?= base_url() . "/assets/images/" . $k['gambar']; ?>" onclick="showImageModal(1)">
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        function showImageModal(id) {
            $.ajax({
                url: "<?= base_url('assets/images/') ?>" + id,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    const imageUrl = "<?= base_url('/assets/images/') ?>" + response.image_data
                        .nama_file_gambar;
                    $('#modalImage').attr('src', imageUrl);
                    $('#imageModal').show();
                }
            });
        }

        function closeImageModal() {
            $('#modalImage').attr('src', '');
            $('#imageModal').hide();
        };
    </script>

    <footer id="footer">
        <div class="left">
            <img src="<?= base_url('assets/images/logo.png') ?>" alt="">
            <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione quaerat quasi itaque fugit
                    similique animi
                    pariatur! Cumque temporibus in, magni, vero aperiam voluptatibus expedita error eaque autem,
                    veritatis
                    assumenda consequuntur?</li>
                <li>
                    <div class="socmed_icon">
                        <a href="https://www.instagram.com/">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/">
                            <i class="fab fa-facebook"></i>
                        </a> <!-- Ikon Facebook -->
                        <a href="https://www.linkedin.com/">
                            <i class="fab fa-linkedin"></i>
                        </a> <!-- Ikon LinkedIn -->
                        <a href="https://www.instagram.com/">
                            <i class="fab fa-instagram"></i>
                        </a><!-- Ikon Instagram -->
                    </div>
                </li>
            </ul>
        </div>
        <div class="middle">

            <ul>
                <h5>About Us</h5>
                <li><a href="">Profil</a></li>
                <li><a href="">Struktur Organisasi</a></li>
                <li><a href="">Visi Misi</a></li>
                <li><a href="">Program Kerja</a></li>
            </ul>
        </div>
        <div class="right">
            <ul>
                <h5>Keanggotaan</h5>
                <li><a href="">Mari bergabung dengan kami.</a></li>
                <br>
                <li><a href="">0877-3152-3378</a></li>
            </ul>
        </div>
    </footer>

    <!-- Tambahkan script JavaScript -->
    <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>