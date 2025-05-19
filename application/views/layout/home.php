<div class="container-motto">
    <div class="container-motto-slider">
        <div class="container-motto-slide" style="background-image: url('assets/images/Bromo1.jpg');"></div>
        <div class="container-motto-slide" style="background-image: url('assets/images/Ijen1.jpg');"></div>
        <div class="container-motto-slide" style="background-image: url('assets/images/Dieng1.jpg');"></div>
    </div>
    <div class="container-motto-text">
        <h1>Mau Kemana Hari Ini?</h1>
        <p>Jelajahi destinasi wisata terbaik di Indonesia bersama Berlabuh</p>
    </div>
</div>

<div class="container-home-destination">
    <div class="container-home-destination-head">
        <h2>Destinasi Populer</h2>
    </div>
    <div class="container-home-destination-card">
        <?php if (!empty($popular_tours)): ?>
        <?php foreach ($popular_tours as $tour): ?>
        <div class="home-destination-card">
            <div class="home-destination-image">
                <img src="<?php echo base_url('assets/images/packages/' . $tour['image']); ?>"
                    alt="<?php echo html_escape($tour['title']); ?>">
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

<div class="testimoni">
    <input type="radio" name="slider" id="slide1" checked>
    <input type="radio" name="slider" id="slide2">
    <input type="radio" name="slider" id="slide3">

    <div class="slides">
        <div class="testimonial-slide s1">
            <img src="https://i.pravatar.cc/80?img=1" alt="User 1" class="testimonial-image">
            <div class="testimonial-content">
                <p>"Saya sangat puas dengan pelayanan dari travel ini. Dari awal pemesanan hingga akhir perjalanan
                    semuanya terasa profesional dan nyaman. Pemandu wisatanya sangat informatif dan ramah, selalu siap
                    membantu dan menjawab pertanyaan kami. Momen melihat matahari terbit dari Penanjakan benar-benar
                    magis, membuat saya terharu. Ini adalah salah satu liburan terbaik saya sejauh ini!"</p>
                <div class="testimonial-author">Dina Puspitasari</div>
                <div class="testimonial-role">Traveler</div>
            </div>
        </div>

        <div class="testimonial-slide s2">
            <img src="https://i.pravatar.cc/80?img=2" alt="User 2" class="testimonial-image">
            <div class="testimonial-content">
                <p>"Sebagai seorang fotografer, saya mencari paket wisata yang tidak hanya nyaman, tapi juga bisa
                    memberi akses terbaik ke spot-spot foto di Bromo. Travel ini benar-benar memenuhi ekspektasi saya.
                    Jeep-nya sangat bersih dan sopirnya tahu banyak spot tersembunyi yang tidak terlalu ramai. Saya
                    berhasil mendapatkan banyak hasil foto yang memuaskan, terutama saat kabut pagi menyelimuti lautan
                    pasir. Recommended banget!"</p>
                <div class="testimonial-author">Andi Pratama</div>
                <div class="testimonial-role">Blogger</div>
            </div>
        </div>

        <div class="testimonial-slide s3">
            <img src="https://i.pravatar.cc/80?img=3" alt="User 3" class="testimonial-image">
            <div class="testimonial-content">
                <p>"Awalnya saya ragu ikut trip ini sendirian, tapi ternyata semua berjalan lancar dan menyenangkan.
                    Saya bertemu dengan banyak teman baru, dan kru travel-nya sangat membantu dan perhatian. Semuanya
                    sudah disiapkan dengan baik mulai dari transportasi, makan, hingga tiket masuk. Saya tidak perlu
                    repot mengurus apa pun. Perjalanan ke Kawah Bromo dan Bukit Teletubbies jadi kenangan yang sulit
                    dilupakan. Pasti ikut lagi kalau ke Bromo!"</p>
                <div class="testimonial-author">Rudi Hartono</div>
                <div class="testimonial-role">Fotografer Freelance</div>
            </div>
        </div>
    </div>

    <div class="slider-nav">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
    </div>
</div>