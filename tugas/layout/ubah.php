<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubah Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="h2 text-center">Ubah Barang</div>
        <div class="main">
            <form method="post" action="ubah.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>" />
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori">
                        <option <?php echo is_select('Komputer', $data['kategori']); ?> value="Komputer">Komputer
                        </option>
                        <option <?php echo is_select('Elektronik', $data['kategori']); ?> value="Elektronik">Elektronik
                        </option>
                        <option <?php echo is_select('Handphone', $data['kategori']); ?> value="Handphone">Handphone
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga_jual">Harga Jual</label>
                    <input type="text" class="form-control" id="harga_jual" name="harga_jual"
                        value="<?php echo $data['harga_jual']; ?>" />
                </div>
                <div class="form-group">
                    <label for="harga_beli">Harga Beli</label>
                    <input type="text" class="form-control" id="harga_beli" name="harga_beli"
                        value="<?php echo $data['harga_beli']; ?>" />
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $data['stok']; ?>" />
                </div>
                <div class="form-group">
                    <label for="file_gambar">File Gambar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file_gambar" name="file_gambar">
                        <label class="custom-file-label">Pilih File</label>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $data['id_barang']; ?>" />
                <button type="submit" name="submit" class="btn btn-block btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>