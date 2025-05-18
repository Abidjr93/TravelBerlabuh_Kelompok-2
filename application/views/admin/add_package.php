<div class="dashboard-header">
  <h1>Tambah Paket Tour</h1>
  <a href="<?php echo base_url('dashboard'); ?>" class="btn">Kembali</a>
</div>

<?php if (validation_errors()): ?>
  <div class="alert alert-danger">
    <?php echo validation_errors(); ?>
  </div>
<?php endif; ?>

<div class="card">
  <?php echo form_open_multipart('dashboard/add'); ?>
  <div class="form-group">
    <label for="title">Judul Paket</label>
    <input type="text" name="title" id="title" class="form-control" value="<?php echo set_value('title'); ?>">
  </div>

  <div class="form-group">
    <label for="destination">Destinasi</label>
    <input type="text" name="destination" id="destination" class="form-control" value="<?php echo set_value('destination'); ?>">
  </div>

  <div class="form-group">
    <label for="location">Lokasi</label>
    <input type="text" name="location" id="location" class="form-control" value="<?php echo set_value('location'); ?>">
  </div>

  <div class="form-group">
    <label for="duration">Durasi (Hari)</label>
    <input type="text" name="duration" id="duration" class="form-control" value="<?php echo set_value('duration'); ?>">
  </div>

  <div class="form-group">
    <label for="group_size">Ukuran Grup</label>
    <input type="text" name="group_size" id="group_size" class="form-control" value="<?php echo set_value('group_size'); ?>" placeholder="contoh: 5 Orang">
  </div>

  <div class="form-group">
    <label for="price">Harga (Rp)</label>
    <input type="number" name="price" id="price" class="form-control" value="<?php echo set_value('price'); ?>">
  </div>

  <div class="form-group">
    <label for="description">Deskripsi</label>
    <textarea name="description" id="description" class="form-control"><?php echo set_value('description'); ?></textarea>
  </div>

  <div class="form-group">
    <label for="available_months">Bulan Tersedia</label>
    <input type="text" name="available_months" id="available_months" class="form-control" value="<?php echo set_value('available_months'); ?>" placeholder="contoh: January,February,March">
    <small>Pisahkan dengan koma tanpa spasi</small>
  </div>

  <div class="form-group">
    <div class="checkbox-container">
      <input type="checkbox" name="is_featured" id="is_featured" value="1" <?php echo set_checkbox('is_featured', '1'); ?>>
      <label for="is_featured">Tampilkan di Halaman Utama</label>
    </div>
  </div>

  <div class="form-group">
    <label for="image">Gambar</label>
    <input type="file" name="image" id="image" class="form-control">
    <small>Format: JPG, JPEG, PNG. Maksimal 2MB</small>
  </div>

  <div class="form-group">
    <button type="submit" class="btn">Simpan</button>
  </div>
  <?php echo form_close(); ?>
</div>