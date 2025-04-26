<div class="container-motto">
    <div class="container-motto-slider">
        <div class="container-motto-slide" style="background-image: url('assets/images/Bromo1.jpg');"></div>
        <div class="container-motto-slide" style="background-image: url('assets/images/Ijen1.jpg');"></div>
        <div class="container-motto-slide" style="background-image: url('assets/images/Dieng1.jpg');"></div>
    </div>
    <div class="container-motto-text">
        <h1>Discover the World</h1>
        <p>Explore amazing destinations with our curated travel experiences</p>
    </div>
</div>

<div class="container-home-destination">
    <div class="container-home-destination-head">
        <h2>Popular Destinations</h2>
    </div>
    <div class="container-home-destination-card">
        <?php
        $tours = [
            [
                'id' => 1,
                'title' => 'Gunung Bromo (Malang)',
                'image' => 'bromo1.jpg',
                'price' => 200.000,
            ],
            [
                'id' => 2,
                'title' => 'Kawah Ijen (Banyuwangi)',
                'image' => 'Ijen1.jpg',
                'price' => 300.000,
            ],
            [
                'id' => 3,
                'title' => 'Gunung Dieng (Wonosobo)',
                'image' => 'Dieng1.jpg',
                'price' => 500.000,
            ],
        ];

        foreach ($tours as $tour) {
            echo '<div class="home-destination-card">';
            echo '<div class="home-destination-image">';
            echo '<img src="assets/images/' . $tour['image'] . '" alt="' . $tour['title'] . '">';
            echo '<div class="home-destination-price">' . $tour['price'] . '.000/People</div>';
            echo '</div>';
            echo '<div class="home-destination-content">';
            echo '<h3>' . $tour['title'] . '</h3>';
            echo '<div class="home-destination-meta">';
            echo '</div>';
            echo '<a href="destinasi-detail.php?id=' . $tour['id'] . '" class="btn-small">View Details</a>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
    <div class="home-destination-button">
        <a href="<?= base_url('Tours#Daftar_Paket') ?>"class="btn">Lihat Paket Lainnya</a>
    </div>
</div>

<div class="container-home-why">
    <div class="container-home-why-header">
        <h2>Kenapa Harus Memilih Berlabuh Travel?</h2>
    </div>
    <div class="container-home-why-card">
        <div class="why-feature">
            <div class="why-feature-icon">
                <i class="fas fa-globe"></i>
            </div>
            <h3>Destinasi Terbaik</h3>
            <p>Kami menawarkan anda destinasi terpopuler dan terbaik di Indonesia</p>
        </div>
        <div class="why-feature">
            <div class="why-feature-icon">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h3>Pemesanan Aman</h3>
            <p>Data pribadi dan metode pembayaran anda aman dan dijamin oleh CS kami</p>
        </div>
        <div class="why-feature">
            <div class="why-feature-icon">
                <i class="fas fa-headset"></i>
            </div>
            <h3>Pelayanan 24 Jam</h3>
            <p>Customer Service kami siap kapanpun anda butuh (kecuali hari kiamat)</p>
        </div>
        <div class="why-feature">
            <div class="why-feature-icon">
                <i class="fas fa-tag"></i>
            </div>
            <h3>Harga Terbaik</h3>
            <p>Kami menjamin harga paling terjangkau untuk anda</p>
        </div>
    </div>
</div>

<div class="stats">
  <div class="stat">
    <div class="label">DESTINATIONS</div>
    <div class="number" data-target="<?= $destinations ?>">0</div>
  </div>
  <div class="stat">
    <div class="label">PEOPLE SERVED</div>
    <div class="number" data-target="<?= $people ?>">0</div>
  </div>
  <div class="stat">
    <div class="label">YEARS ACTIVE</div>
    <div class="number" data-target="<?= $years ?>">0</div>
  </div>
</div>

<script src="<?= base_url('assets/counter.js') ?>"></script>