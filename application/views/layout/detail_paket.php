    <!-- Main Content -->
    <main>
      <div class="container">
        <div class="main-content">
          <div class="tour-details">
            <img src="assets/images/Bromo1.jpg" alt="Gunung Bromo" class="detail-image">

            <h2>Gunung Bromo (Malang, Jawa Timur)</h2>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span>4.8 (200 reviews)</span>
            </div>

            <h3>Fasilitas & Aktivitas</h3>
            <div class="highlights">
              <div class="highlight-column">
                <div class="highlight-item">
                  <i class="fas fa-circle"></i>
                  <span>Sunrise dari Penanjakan</span>
                </div>
                <div class="highlight-item">
                  <i class="fas fa-circle"></i>
                  <span>Jelajah Kawah Bromo</span>
                </div>
                <div class="highlight-item">
                  <i class="fas fa-circle"></i>
                  <span>Trip Jeep di Lautan Pasir Berbisik</span>
                </div>
                <div class="highlight-item">
                  <i class="fas fa-circle"></i>
                  <span>Bukit Teletubis</span>
                </div>
              </div>
              <div class="highlight-column">
                <div class="highlight-item">
                  <i class="fas fa-circle"></i>
                  <span>Cocok untuk pecinta alam & fotografi</span>
                </div>
              </div>
            </div>

            <h3>Deskripsi Perjalanan</h3>
            <p>
              Nikmati pesona matahari terbit paling ikonik di Indonesia! Gunung Bromo menyuguhkan pemandangan dramatis dengan lautan pasir yang luas, kaldera megah, dan siluet gunung yang menyala keemasan saat fajar. Dalam trip ini, kamu akan diajak menyaksikan sunrise dari Penanjakan, menjelajah kawah Bromo, dan berpetualang dengan jeep di pasir berbisik hingga ke Bukit Teletubbies. Perjalanan ini cocok untuk semua kalangan, terutama pecinta alam dan fotografi.
            </p>

            <h3>Rencana Perjalanan</h3>
            <div class="itinerary">
              <div class="day">
                <h4>Day 1</h4>
                <ul>
                  <li>Keberangkatan menuju Bromo</li>
                  <li>Tiba di penginapan dan persiapan trip malam</li>
                  <li> Briefing dan istirahat</li>
                </ul>
              </div>
              <div class="day">
                <h4>Day 2</h4>
                <ul>
                  <li>Keberangkatan menuju Bromo</li>
                  <li>Tiba di penginapan dan persiapan trip malam</li>
                  <li> Briefing dan istirahat</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="booking-sidebar">
            <div class="booking-form">
              <h3>Pesan Paket Ini</h3>
              <div class="price">
                <span class="amount">Rp.250.000</span> / per orang
              </div>
              <?php echo validation_errors('<div class="error">', '</div>'); ?>

              <?php echo form_open('detail_paket/send_WA', ['id' => 'detail_paket', 'target' => '_blank']); ?>
              <div class="form-group">
                <input type="text"
                  name="nama_lengkap"
                  placeholder="Nama Lengkap"
                  value="<?php echo set_value('nama_lengkap'); ?>"
                  required>
              </div>
              <div class="form-group">
                <input type="email"
                  name="email"
                  placeholder="Email"
                  value="<?php echo set_value('email'); ?>"
                  required>
              </div>
              <div class="form-group">
                <input type="tel"
                  name="telepon"
                  placeholder="Nomor Whatsapp"
                  value="<?php echo set_value('telepon'); ?>"
                  required>
              </div>
              <div class="form-group">
                <input type="date"
                  name="tanggal"
                  value="<?php echo set_value('tanggal'); ?>"
                  required>
              </div>

              <div class="add-options">
                <h4>Fasilitas Tambahan</h4>
                <div class="option">
                  <input type="checkbox" id="tg" name="options[]" value="tg" <?php echo set_checkbox('options[]', 'tg'); ?>>
                  <label for="tg">Tour guide</label>
                </div>
                <div class="option">
                  <input type="checkbox" id="fg" name="options[]" value="fg" <?php echo set_checkbox('options[]', 'fg'); ?>>
                  <label for="fg">Fotografer</label>
                </div>
                <div class="option">
                  <input type="checkbox" id="makan_malam" name="options[]" value="makan_malam" <?php echo set_checkbox('options[]', 'makan_malam'); ?>>
                  <label for="makan_malam">Makan Malam</label>
                </div>
                <div class="option">
                  <input type="checkbox" id="kendaraan" name="options[]" value="kendaraan" <?php echo set_checkbox('options[]', 'kendaraan'); ?>>
                  <label for=" kendaraan">Sewa Jeep</label>
                </div>
              </div>
              <input type="hidden" name="noWA" value="6282114868129">

              <button type="submit" class="book-now-btn">PESAN SEKARANG</button>
              <?php echo form_close(); ?>
            </div>
            <div class="tour-info">
              <h3>Info Tambahan</h3>
              <div class="info-item">
                <div class="info-label">Durasi</div>
                <div class="info-value">2 Hari / 1 Malam</div>
              </div>
              <div class="info-item">
                <div class="info-label">Lokasi</div>
                <div class="info-value">Malang, Jawa Timur</div>
              </div>
              <div class="info-item">
                <div class="info-label">Group Size</div>
                <div class="info-value">Maksimal 5 Orang</div>
              </div>
              <div class="info-item">
                <div class="info-label">Usia</div>
                <div class="info-value">Untuk semua usia</div>
              </div>
              <div class="info-item">
                <div class="info-label">Bahasa</div>
                <div class="info-value">Indonesia</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>