<?php if ($this->session->flashdata('success')): ?>
  <div class="alert alert-success">
    <?php echo $this->session->flashdata('success'); ?>
  </div>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
  <div class="alert alert-danger">
    <?php echo $this->session->flashdata('error'); ?>
  </div>
<?php endif; ?>

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th width="5%">No</th>
        <th width="15%">Gambar</th>
        <th width="20%">Judul Paket</th>
        <th width="15%">Destinasi</th>
        <th width="10%">Lokasi</th>
        <th width="10%">Durasi</th>
        <th width="10%">Harga</th>
        <th width="15%">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($packages)): ?>
        <tr>
          <td colspan="8" style="text-align: center;">Belum ada data paket tour</td>
        </tr>
      <?php else: ?>
        <?php $no = 1;
        foreach ($packages as $package): ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td>
              <?php if (!empty($package->image) && file_exists(FCPATH . 'assets/images/packages/' . $package->image)): ?>
                <img src="<?php echo base_url('assets/images/packages/' . $package->image); ?>"
                  alt="<?php echo htmlspecialchars($package->title); ?>"
                  style="max-width: 100px; max-height: 60px;">
              <?php else: ?>
                <img src="<?php echo base_url('assets/images/no-image.jpg'); ?>"
                  alt="No Image"
                  style="max-width: 100px; max-height: 60px;">
              <?php endif; ?>
            </td>
            <td><?php echo htmlspecialchars($package->title); ?></td>
            <td><?php echo htmlspecialchars($package->destination); ?></td>
            <td><?php echo htmlspecialchars($package->location); ?></td>
            <td><?php echo htmlspecialchars($package->duration); ?> Hari</td>
            <td>Rp.<?php echo number_format($package->price, 0, ',', '.'); ?></td>
            <td class="actions">
              <a href="<?php echo base_url('dashboard/edit/' . $package->id); ?>" class="btn">Edit</a>
              <a href="<?php echo base_url('dashboard/delete/' . $package->id); ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus paket ini?')">Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
</div>