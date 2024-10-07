  <!-- include the header partial -->
   <?php
   require_once HEADER;
   ?>
   <main>
        <h2>Makanan</h2>
        <a href="<?= BASEURL;?>/produk/create" class="btn btn-add">Tambah Makanan</a>
  
        <table id="dataTable">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['produk'] as $row) : ?>
                <tr>
                    <td><img height="100px" width="100px" src="<?=BASEURL?>/img/<?=$row['gambar']?>" alt="Foto Produk"></td>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['deskripsi']) ?></td>
                    <td><?= htmlspecialchars($row['stok']) ?></td>
                    <td><?= htmlspecialchars($row['harga']) ?></td>
                    <td class="action-links">
                        <a href="<?= BASEURL ?>/produk/show/<?= $row['id'] ?>" class="edit">Ubah</a>
                        <a href="<?= BASEURL ?>/produk/delete/<?= $row['id'] ?>" class="delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h2>Total Stock = <?= htmlspecialchars($data['totalStok']['total'])?></h2>
        <a href="<?= BASEURL;?>/auth/logout" class="btn btn-logout">Logout</a>
    </main>

     <?php
   require_once FOOTER;
   ?>

   
