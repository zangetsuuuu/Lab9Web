<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Tambah Barang</title>
</head>
<body>
    <div class="container">
        <div class="h2 text-center">Tambah Barang</div>
        <div class="main">
            <form action="tambah.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Barang" />
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" id="kategori" name="kategori">
                        <option value="Komputer">Komputer</option>
                        <option value="Elektronik">Elektronik</option>
                        <option value="Handphone">Handphone</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga Jual</label>
                    <input type="text" class="form-control" id="harga_jual" name="harga_jual" placeholder="Masukkan Harga Jual" />
                </div>
                <div class="form-group">
                    <label>Harga Beli</label>
                    <input type="text" class="form-control" id="harga_beli" name="harga_beli" placeholder="Masukkan Harga Beli" />
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="text" class="form-control" id="stok" name="stok" placeholder="Masukkan Jumlah Stok" />
                </div>
                <div class="form-group">
                    <label>File Gambar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file_gambar" name="file_gambar">
                        <label class="custom-file-label">Pilih File</label>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-block btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>
