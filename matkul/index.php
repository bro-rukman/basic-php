<?php
include("class_matkul.php");
$matkul = new class_matkul;
$data_all = $matkul->getAllMatkul();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
</head>

<body>
    <h1>Matkul</h1>
    <p><a href="tambah.php">Tambah Data</a></p>
    <div>
        <table border="1px">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Mata kuliah</th>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                while ($rec = $data_all->fetch_array()) {
                    $no++; ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $rec['kd_matkul']; ?></td>
                        <td><?php echo $rec['nama']; ?></td>
                        <td><?php echo $rec['sks']; ?></td>
                        <td><a href="edit.php?kd_matkul=<?php echo $rec['kd_matkul'] ?>">Edit</a>|| <a href="hapus.php?kd_matkul=<?php echo $rec['kd_matkul'] ?>">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>