<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= ('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css') ?>" />
  <style>
    /* CSS minimalis sesuai dengan tema website */
    :root {
      --primary-color: #4a90e2;
      --secondary-color: #75c9f0;
      --accent-color: #1e3a8a;
      --light-color: #f0f8ff;
      --white: #ffffff;
      --text-color: #333333;
      --shadow-color: rgba(0, 0, 0, 0.1);
      --border-color: #dee2e6;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    /*--primary-color: #4a90e2;
    --secondary-color: #75c9f0;
    */
    body {
      background-color: #f5f5f5;
      color: var(--text-color);
    }

    .header {
      position: sticky;
      top: 0;
      left: 0;
      width: 100%;
      padding: 1.2rem 5%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 1000;
      background-color: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(10px);
      box-shadow: 0 2px 10px var(--shadow-color);
    }

    .header.scrolled {
      padding: 0.8rem 5%;
      background-color: rgba(255, 255, 255, 0.95);
    }

    .social-icons {
      display: flex;
      gap: 1.2rem;
    }

    .social-icon {
      color: var(--primary-color);
      font-size: 1.2rem;
      transition: all 0.3s ease;
    }

    .social-icon:hover {
      color: var(--accent-color);
      transform: translateY(-3px);
    }

    .logo {
      font-family: 'Montserrat', sans-serif;
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--accent-color);
      text-decoration: none;
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }

    .nav-menu {
      display: flex;
      gap: 2rem;
    }

    .nav-link {
      color: var(--text-color);
      text-decoration: none;
      font-size: 0.95rem;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      position: relative;
      padding: 0.5rem 0;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      color: var(--primary-color);
    }


    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
      background-color: white;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar .logo {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--primary-color);
      text-decoration: none;
    }

    .main-content {
      width: 100%;
      max-width: 1200px;
      margin: 30px auto;
      padding: 0 20px;
    }

    .dashboard-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: var(--primary-color);
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
      font-size: 14px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: var(--secondary-color);
    }

    .btn-danger {
      background-color: #dc3545;
    }

    .btn-danger:hover {
      background-color: #bd2130;
    }

    .alert {
      padding: 12px 15px;
      margin-bottom: 20px;
      border-radius: 4px;
    }

    .alert-success {
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
    }

    .alert-danger {
      background-color: #f8d7da;
      color: #721c24;
      border: 1px solid #f5c6cb;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      margin-bottom: 30px;
    }

    table th,
    table td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid var(--border-color);
    }

    table th {
      background-color: var(--light-color);
      font-weight: 600;
    }

    table tr:hover {
      background-color: rgba(0, 123, 255, 0.03);
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
    }

    .form-control {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid var(--border-color);
      border-radius: 4px;
      font-size: 14px;
    }

    .form-control:focus {
      outline: none;
      border-color: var(--primary-color);
      box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.25);
    }

    textarea.form-control {
      min-height: 120px;
    }

    .card {
      background-color: white;
      border-radius: 4px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      padding: 20px;
      margin-bottom: 30px;
    }

    .actions {
      display: flex;
      gap: 10px;
    }

    .checkbox-container {
      display: flex;
      align-items: center;
    }

    .checkbox-container input {
      margin-right: 10px;
    }
  </style>
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
        <a href="<?php echo base_url('dashboard/add'); ?>" class="btn">Tambah Paket</a>
        <a href="<?php echo base_url('Tours#Daftar_Paket'); ?>" class="btn" target="_blank">Lihat Website</a>
      </div>
      <div>

      </div>
    </nav>
  </header>

  <div class="main-content">