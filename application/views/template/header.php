<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Home</title>
  <link rel="stylesheet" href="<?= ('assets/style.css') ?>"/>
</head>
<body>
<header>
        <div class="container">
            <div class="logo">
                <a href="index.php">Berlabuh Tripp and Travel</a>
            </div>
            <nav>
                <ul>
                    <li><a href=<?= site_url('home')?>>Home</a></li>
                    <li><a href=<?= site_url('about')?>>About</a></li>
                    <li><a href="tours.php">Tours</a></li>
                    <li><a href="destinations.php">Destinations</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <div class="phone">
                <i class="fas fa-phone-alt"></i>
                <span>082123456789</span>
            </div>
        </div>
    </header>