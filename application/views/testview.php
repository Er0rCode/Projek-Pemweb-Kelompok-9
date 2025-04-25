<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Mahasiswa</title>
</head>
<body>
    <h2>Form Input Data Mahasiswa</h2>
    
    <?php if(isset($error)) { echo $error; } ?>
    <?php if(isset($success)) { echo $success; } ?>
    
    <form action="<?php echo site_url('testcont/simpan'); ?>" method="post">
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" required>
        </p>
        <p>
            <label>NIM:</label>
            <input type="text" name="nim" required>
        </p>
        <p>
            <label>Alamat:</label>
            <textarea name="alamat" required></textarea>
        </p>
        <p>
            <input type="submit" value="Simpan">
        </p>
    </form>
    
    <h3>Data Mahasiswa</h3>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
        </tr>
        <?php if(isset($mahasiswa) && count($mahasiswa) > 0): ?>
            <?php $no = 1; foreach($mahasiswa as $mhs): ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $mhs->nama; ?></td>
                <td><?php echo $mhs->nim; ?></td>
                <td><?php echo $mhs->alamat; ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">Tidak ada data</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>