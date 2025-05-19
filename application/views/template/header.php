<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul ?></title>
    <link rel="stylesheet" href="<?= ('assets/header.css') ?>" />
    <link rel="stylesheet" href="<?= ('assets/footer.css') ?>" />
    <link rel="stylesheet" href="<?= ('assets/style.css') ?>" />
    <link rel="stylesheet"
        href="<?= ('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css') ?>" />
    <link rel="stylesheet" href="<?= ('assets/home.css') ?>" />
    <link rel="stylesheet" href="<?= ('assets/about.css') ?>" />
    <link rel="stylesheet" href="<?= ('assets/tours.css') ?>" />
    <link rel="stylesheet" href="<?= ('assets/detail_pake.css') ?>" />
</head>

<body>
    <header class="header">
        <img src="assets/images/LogoBerlabuhPanjang.png" class="logo-img">

        <nav class="navbar">
            <div class="nav-content">
                <div class="nav-menu desktop-menu">
                    <a href="<?= base_url('home') ?>"
                        class="nav-link <?= ($page_aktif == 'home') ? 'active' : '' ?>">Home</a>
                    <a href="<?= base_url('Tours') ?>"
                        class="nav-link <?= ($page_aktif == 'Tours') ? 'active' : '' ?>">Destination</a>
                    <a href="<?= base_url('about') ?>"
                        class="nav-link <?= ($page_aktif == 'about') ? 'active' : '' ?>">About Us</a>
                </div>

                <div class="garis-vertical"></div>

                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/berlabuh.malang/?hl=id" class="social-icon"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <div class="hamburger" onclick="toggleMobileMenu()">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <a href="<?= base_url('home') ?>" class="nav-link">Home</a>
            <a href="<?= base_url('Tours') ?>" class="nav-link">Destination</a>
            <a href="<?= base_url('about') ?>" class="nav-link">About Us</a>
        </div>
    </header>

    <script>
    function toggleMobileMenu() {
        const menu = document.getElementById("mobileMenu");
        menu.classList.toggle("show");
    }
    </script>

</body>