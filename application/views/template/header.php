<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul ?></title>
    <link rel="stylesheet" href="<?= ('assets/header.css') ?>" />
    <link rel="stylesheet" href="<?= ('assets/footer.css') ?>" />
    <link rel="stylesheet" href="<?= ('assets/style.css') ?>" />
    <link rel="stylesheet" href="<?= ('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css') ?>" />
    <link rel="stylesheet" href="<?= ('assets/home.css') ?>" />
    <link rel="stylesheet" href="<?= ('assets/about.css') ?>" />
    <link rel="stylesheet" href="<?= ('assets/tours.css') ?>" />
    <link rel="stylesheet" href="<?= ('assets/detail_pake.css') ?>" />
</head>

<body>
    <header class="header">
        <div class="social-icons">
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
        </div>

        <a href="<?= base_url() ?>" class="logo">Berlabuh Trip and Travel</a>

        <nav>
            <div class="nav-menu">
                <a href="<?= base_url('home') ?>" class="nav-link <?= ($page_aktif == 'home') ? 'active' : '' ?>">Home</a>
                <a href="<?= base_url('Tours') ?>" class="nav-link <?= ($page_aktif == 'Tours') ? 'active' : '' ?>">Destinasi</a>
                <a href="<?= base_url('about') ?>" class="nav-link <?= ($page_aktif == 'about') ? 'active' : '' ?>">About Us</a>
            </div>
        </nav>
    </header>