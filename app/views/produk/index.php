   <?php
   require_once HEADER;
   ?>
<div class="container">
        <h1>Tabel Produk</h1>
        <a  href="<?= BASEURL;?>/produk/create">Tambah Produk</a>
        <a  href="<?= BASEURL;?>/brand/create">Tambah Brand</a>

        <br>
        <table>
            <thead>
                <tr>
                    <th>Brand</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Gambar</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
    <?php foreach($data['produk'] as $row) : ?>
                <tr>
                    <td><?= $row['brand_name']?></td>
                    <td><?= $row['nama']?></td>
                    <td><?= $row['deskripsi']?></td>
                    <td><?= $row['harga']?></td>
                    <td><?= $row['stok']?></td>
                    <td><img height="100px" width="100px" src="<?=BASEURL?>/img/<?=$row['gambar']?>" alt="Foto Produk"></td>
                    <td><a href="<?= BASEURL ?>/produk/show/<?= $row['id'] ?>" class="edit-btn">Edit</a></td>
                    <td>   <a href="<?= BASEURL ?>/produk/delete/<?= $row['id'] ?>" class="delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a></td>
                </tr>
    <?php endforeach; ?>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
       <a href="/" style="background-color: red; text-decoration: none; font-weight: bold; padding: 5px 10px; border: 1px solid red; border-radius: 5px;">Logout</a>
    </div>

       <?php
   require_once FOOTER;
   ?>