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
            <?php if (!empty($package->image)): ?>
              <img src="<?php echo base_url('assets/images/packages/' . $package->image); ?>" alt="<?php echo $package->title; ?>" style="max-width: 100px; max-height: 60px;">
            <?php else: ?>
              <img src="<?php echo base_url('assets/images/no-image.jpg'); ?>" alt="No Image" style="max-width: 100px; max-height: 60px;">
            <?php endif; ?>
          </td>
          <td><?php echo $package->title; ?></td>
          <td><?php echo $package->destination; ?></td>
          <td><?php echo $package->location; ?></td>
          <td><?php echo $package->duration; ?> Hari</td>
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