<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Home</title>
  <link rel="stylesheet" href="<?= ('assets/style.css') ?>"/>
  <link rel="stylesheet" href="<?=('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css')?>"/>
  <link rel="stylesheet" href="<?= ('assets/home.css') ?>"/>
  <link rel="stylesheet" href="<?= ('assets/about.css') ?>"/>
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="about.css">
</head>
<body>
<header>
        <div class="container">
            <div class="logo">
                <a href="index.php">Berlabuh Trip and Travel</a>
            </div>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url('home'); ?> ">Home</a></li>
                    <li><a href="<?php echo base_url('about'); ?> ">About</a></li>
                    <li><a href="<?php echo base_url('destinasi'); ?>">Destinations</a></li>
                </ul>
            </nav>
        </div>
    </header>