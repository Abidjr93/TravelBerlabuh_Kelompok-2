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
        <?php if (!empty($popular_tours)): ?>
            <?php foreach ($popular_tours as $tour): ?>
                <div class="home-destination-card">
                    <div class="home-destination-image">
                        <img src="<?php echo base_url('assets/images/packages/' . $tour['image']); ?>" alt="<?php echo html_escape($tour['title']); ?>">
                        <div class="home-destination-price">Rp.<?php echo number_format($tour['price']); ?>/Orang</div>
                    </div>
                    <div class="home-destination-content">
                        <h3><?php echo html_escape($tour['title']); ?></h3>
                        <div class="home-destination-meta">
                            <div>
                                <i class="fas fa-map-marker-alt"></i>
                                <span><?php echo html_escape($tour['location']); ?></span>
                            </div>
                            <div>
                                <i class="fas fa-calendar-days"></i>
                                <span><?php echo html_escape($tour['duration']); ?> Hari</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="no-tours-found">No tour packages available.</div>
        <?php endif; ?>
    </div>
    <div class="home-destination-button">
        <a href="<?= base_url('Tours#Daftar_Paket') ?>" class="btn">Lihat Paket Lainnya</a>
    </div>
</div>

<div class="container">
    <div class="section-title">
        <h2>Kenapa Harus Memilih Kami?</h2>
        <p>Inilooh Benefitnyaa</p>
    </div>
    <div class="features-grid">
        <div class="feature">
            <div class="feature-icon">
                <i class="fas fa-globe"></i>
            </div>
            <h3>Destinasi Terbaik</h3>
            <p>Kami menawarkan anda destinasi terpopuler dan terbaik di Indonesia</p>
        </div>
        <div class="feature">
            <div class="feature-icon">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h3>Pemesanan Aman</h3>
            <p>Data pribadi dan metode pembayaran anda aman dan dijamin oleh CS kami</p>
        </div>
        <div class="feature">
            <div class="feature-icon">
                <i class="fas fa-headset"></i>
            </div>
            <h3>Pelayanan 24 Jam</h3>
            <p>Customer Service kami siap kapanpun anda butuh (kecuali hari kiamat)</p>
        </div>
        <div class="feature">
            <div class="feature-icon">
                <i class="fas fa-tag"></i>
            </div>
            <h3>Harga Terbaik</h3>
            <p>Kami menjamin harga paling terjangkau untuk anda</p>
        </div>
    </div>
</div>
</div>