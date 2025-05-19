    <!-- Page Header -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Tentang Kami</h1>
                <p>Beragam cerita yang membawa kami ke titik ini</p>
                <a href="<?= base_url('Tours#Daftar_Paket') ?>" class="btn">Lihat Paket</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Yuk Kenalan Sama Berlabuh</h2>
                    <p>Kami menunjang kenyamanan dan kepuasan anda dalam berlibur, happy explore all!. Oiya travel ini
                        baru aja berdiri di tahun 2024, dengan lebih dari 3 destinasi pilihan favorit dan paket yang
                        terjangkau, kami mengakomodasi hari liburan anda mulai dari penjemputan hingga pulang</p>
                    <p>Kami percaya, healing dan liburan adalah salah satu kebutuhan pasti dari setiap insan. Oleh
                        karenanya kami mengembangkan pelayanan dan akomodasi terbaik demi pelanggan kami, sesuai
                        namanya.. kami akan membantu anda dalam berlabuh menuju tempat anda berlibur dan istirahat.</p>
                    <p>Dengan profesionalitas tim dan tour guide lokal kami, anda akan mendapatkan pengalaman terbaik
                        selama perjalanan. Kami jamin anda tidak akan menyesal untuk memilih layanan kami, oleh
                        karenanya kami berharap anda sebagai customer kami dapat membantu kami untuk terus bangkit dan
                        tumbuh menuju tak terbatas dan melampauinya.</p>
                    <p>Selamat liburan dan bersenang senang! .</p>
                </div>
                <div class="about-image">
                    <img src="<?php echo base_url('assets/images/kita.jpg'); ?> ">
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-title">
                <h2>Tim Kami</h2>
                <p>Professional? oiya jelas, kami expert pada bidangnya masing-masing</p>
            </div>
            <div class="team-grid">
                <?php
                // Example team data
                $team = [
                    [
                        'name' => 'Mas Radit',
                        'position' => 'CEO & Founder',
                        'photo' => 'masdit.jpg',
                        'social' => [
                            'facebook' => 'https://www.facebook.com/share/1GAMnBKgZY/?mibextid=wwXIfr',
                            'twitter' => 'https://www.instagram.com/theraditya_',
                            'instagram' => 'https://www.instagram.com/theraditya_',
                            'linkedin' => 'https://www.linkedin.com/in/raditya-teguh-ananta-b0aa3b150/?originalSubdomain=id'
                        ]
                    ],
                    [
                        'name' => 'Kaiki',
                        'position' => 'Photographer',
                        'photo' => 'Ineffable.jpg',
                        'social' => [
                            'tiktok' => 'https://www.tiktok.com/@ayemmkiki',
                            'instagram' => 'https://www.instagram.com/mrifkywicaksana',
                            'linkedin' => 'https://www.linkedin.com/in/mohammad-rifky-wicaksana-63996631a/'
                        ]
                    ],
                    [
                        'name' => 'Abid',
                        'position' => 'Tour Guide',
                        'photo' => 'abid4.jpg',
                        'social' => [
                            'facebook' => 'https://www.instagram.com/harfu_alam/',
                            'twitter' => 'https://www.instagram.com/harfu_alam/',
                            'instagram' => 'https://www.instagram.com/harfu_alam/',

                        ]
                    ],
                    [
                        'name' => 'Adin Kenyal',
                        'position' => 'Admin & CS',
                        'photo' => 'adin.jpg',
                        'social' => [
                            'facebook' => 'https://www.instagram.com/addiengm/',
                            'twitter' => 'https://www.instagram.com/addiengm/',
                            'instagram' => 'https://www.instagram.com/addiengm/',

                        ]
                    ]
                ];



                foreach ($team as $member) {
                    echo '<div class="team-member">';
                    echo '<div class="team-photo">';
                    echo '<img src="assets/images/' . $member['photo'] . '" alt="' . $member['name'] . '">';
                    echo '</div>';
                    echo '<div class="team-info">';
                    echo '<h3>' . $member['name'] . '</h3>';
                    echo '<p>' . $member['position'] . '</p>';
                    echo '<div class="team-social">';
                    foreach ($member['social'] as $platform => $link) {
                        echo '<a href="' . $link . '"><i class="fab fa-' . $platform . '"></i></a>';
                    }
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Why Choose Us (Same as index.php) -->
    <section class="why-choose-us">
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
    </section>

    <!--Testimoni Section-->
    <section class="testimoni-section">
        <div class="container">
            <div class="testimoni-content">
                <div class="testimoni-text">
                    <h2>Kata Customer Kami</h2>
                    <p>"Seneng bisa jalan-jalan enak ke bromo, dieng, dan kawah ijen dalam durasi liburan sepekan.
                        Disini udah dijamin lengkap semua-muanya deh, mulai dari dijemput sejak tiba di bandara, sampai
                        dianterin pulang setelah trip. Oiya... buat order paket destinasi gausah ragu ya, soalnya
                        manajemen teamnya bagus, fotografer dan adminnya komunikatif, tour guidenya seru dan
                        berpengalaman. Pokoknya seruuu dehh"</p>
                </div>
            </div>
    </section>