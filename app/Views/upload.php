<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/images/logo.png'); ?>" type="image/x-icon">
    <title>Dashboard Upload</title>
</head>

<body>
    <div class="container_dashboard">
        <div class="sidebar">
            <div class="profile">
                <img src="<?php echo base_url('assets/images/profile.png') ?>" alt="">
                <h2>Admin</h2>
            </div>

            <ul>
                <li class="tittle_nav">
                    <p>MENU</p>
                </li>
            </ul>

            <?php
            $active = [
                'upload' => 'active',
            ];
            ?>

            <ul>
                <li><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li><a class="<?= $active['upload'] ?>" href="<?= base_url('upload'); ?>">Upload</a></li>
                <li><a href="<?php echo base_url('Login/logout') ?>">Logout</a></li>
            </ul>
        </div>

        <div class="content_dashboard_upload">
            <form action="<?= base_url('Content/Upload') ?>" method="post" enctype="multipart/form-data" class="form_upload">
                <div class="upload_judul">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="">
                </div>

                <div class="upload_deskripsi">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" id="">
                </div>

                <div class="upload_image">
                    <label for="gambar">Klik di sini dan silahkan upload gambar!
                        <input type="file" name="gambar" id="gambar">
                    </label>
                </div>
                <div class="button_upload">
                    <button>Submit</button>
                </div>
            </form>



        </div>
    </div>
</body>

</html>