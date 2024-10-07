     <?php
   require_once HEADER;
   ?>
    <main>
        <div class="form-container" id="add-car">
            <h2>Edit Makanan</h2>
            <form action="<?= BASEURL ?>/produk/update" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['produk']['id']?>">
                <input type="hidden" name="gambarLama" value="<?= $data['produk']['gambar']?>">
                <div class="form-group">
                    <label for="nama_mobil">Nama Makanan:</label>
                    <input value="<?= $data['produk']['nama']?>" type="text" id="nama_mobil" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="merk">Deskripsi:</label>
                    <input value="<?= $data['produk']['deskripsi']?>" type="text" id="merk" name="deskripsi" required>
                </div>
                <div class="form-group">
                    <label for="model">Stok:</label>
                    <input value="<?= $data['produk']['stok']?>" type="text" id="model" name="stok" required>
                </div>
    
                <div class="form-group">
                    <label for="harga">Harga (Rp):</label>
                    <input value="<?= $data['produk']['harga']?>" type="number" id="harga" name="harga" required min="0">
                </div>
                <img width="100px" height="100px" src="<?=BASEURL?>/img/<?=$data['produk']['gambar']?>" alt=""> <br> <br>
                   <div class="form-group">
                    <label for="harga">Gambar</label>
                    <input type="file" id="harga" name="gambar" >
                </div>
               
                <button type="submit" class="btn btn-submit">Update Makanan</button>
            </form>
        </div>
    </main>
     <?php
   require_once FOOTER;
   ?>