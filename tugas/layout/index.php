<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Data Barang</title>
</head>
<body>
    <div class="container">
        <div class="mt-4 h2 text-center">Data Barang</div>
        <hr>
        <div class="main">
            <a href="tambah.php" class="btn btn-primary my-1">Tambah Barang</a>
            <table class="table">
                <thead class="thead">
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result): ?>
                        <?php while ($row = mysqli_fetch_array($result)): ?>
                            <tr>
                                <td><img src="gambar/<?=$row['gambar'];?>" alt="<?= $row['nama'];?>" class="img-thumbnail"></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['kategori']; ?></td>
                                <td><?= $row['harga_beli']; ?></td>
                                <td><?= $row['harga_jual']; ?></td>
                                <td><?= $row['stok']; ?></td>
                                <td>
                                    <a href="ubah.php?id=<?= $row['id_barang']; ?>" class="btn btn-sm btn-success">Ubah</a>
                                    <a href="hapus.php?id=<?= $row['id_barang']; ?>" class="btn btn-sm btn-danger">Hapus</a> 
                                </td>
                            </tr>
                    <?php endwhile; else: ?>
                        <tr>
                            <td colspan="7">Belum ada data</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>