<!-- Filter Section -->
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Mau Kemana Hari Ini?</h1>
            <p>Jelajahi destinasi wisata terbaik di Indonesia bersama Berlabuh</p>
            <a href="#Daftar_Paket" class="btn">Lihat Paket</a>
        </div>
    </div>
</section>
<div class="container">
    <div class="filter-section">
        <?php echo form_open('tours', ['method' => 'GET', 'id' => 'filter-form']); ?>
        <div class="filter-grid">
            <div class="filter-group">
                <label for="destination">Destination</label>
                <select name="destination" id="destination">
                    <option value="Any Destination">Any Destination</option>
                    <?php foreach ($destinations as $destination): ?>
                    <option value="<?php echo html_escape($destination); ?>"
                        <?php echo ($filters['destination'] == $destination) ? 'selected' : ''; ?>>
                        <?php echo html_escape($destination); ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="filter-group">
                <label for="duration">Duration</label>
                <select name="duration" id="duration">
                    <option value="Any Duration">Any Duration</option>
                    <?php foreach ($durations as $duration): ?>
                    <option value="<?php echo html_escape($duration); ?>"
                        <?php echo ($filters['duration'] == $duration) ? 'selected' : ''; ?>>
                        <?php echo html_escape($duration); ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="filter-group">
                <label for="month">Month</label>
                <select name="month" id="month">
                    <option value="Any Month">Any Month</option>
                    <?php foreach ($months as $month): ?>
                    <option value="<?php echo $month; ?>"
                        <?php echo ($filters['month'] == $month) ? 'selected' : ''; ?>>
                        <?php echo $month; ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="filter-group">
                <label>Price Range</label>
                <div class="price-range">
                    <input type="number" name="min_price" placeholder="Min"
                        value="<?php echo html_escape($filters['min_price']); ?>">
                    <input type="number" name="max_price" placeholder="Max"
                        value="<?php echo html_escape($filters['max_price']); ?>">
                </div>
            </div>
        </div>

        <div class="filter-buttons">
            <button type="submit" class="btn btn-primary">Apply Filters</button>
            <button type="reset" class="btn btn-secondary" id="reset-btn">Reset</button>
        </div>
        <?php echo form_close(); ?>
    </div>

    <!-- Tour Packages -->
    <div class="tours-grid" id="Daftar_Paket">
        <?php if (!empty($tours)): ?>
        <?php foreach ($tours as $tour): ?>
        <div class="tour-card">

            <img src="<?php echo base_url('assets/images/packages/' . $tour['image']); ?>"
                alt="<?php echo html_escape($tour['title']); ?>" class="tour-image">
            <div class="tour-content">
                <?php if ($tour['is_featured']): ?>
                <div class="featured-badge">Populer</div>
                <?php endif; ?>

                <h3 class="tour-title"><?php echo html_escape($tour['title']); ?></h3>

                <div class="tour-meta">
                    <div>
                        <i class="fas fa-calendar-days"></i>
                        <span><?php echo html_escape($tour['duration']); ?> Hari</span>
                    </div>
                    <div>
                        <i class="fas fa-users"></i>
                        <span><?php echo html_escape($tour['group_size']); ?> Orang</span>
                    </div>
                    <div>
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?php echo html_escape($tour['location']); ?></span>
                    </div>
                </div>

                <p class="tour-description"><?php echo html_escape($tour['description']); ?></p>

                <div class="tour-price">
                    Rp.<?php echo number_format($tour['price']); ?> / per Orang
                </div>

                <a href="<?php echo site_url('detail_paket'); ?>" class="view-details">Pesan Sekarang</a>
            </div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <div class="no-results">
            <h3>No tours found matching your criteria</h3>
            <p>Try changing your filter options or <a href="<?php echo site_url('tours'); ?>">view all tours</a>.</p>
        </div>
        <?php endif; ?>
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