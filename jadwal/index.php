<?php
include("class_jadwal.php");
$jadwal = new class_jadwal;
$data = $jadwal->getAllJadwal();
$header = array("No", "Id", "Kode Dosen", "Kode Matkul", "Ruang", "Waktu", "Action");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
    <style>
        h1 {
            text-align: center;
        }

        button {
            margin: 4px;
            padding: 8px;
            border-radius: 8px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div>
        <h1>Jadwal</h1>
        <p><a href="./tambah.php"><button>Tambah Data</button></a></p>
        <div>
            <table border="1">
                <thead>
                    <tr>
                        <?php
                        foreach ($header as $key) { ?>
                            <th><?php echo $key; ?></th>
                        <?php }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $No = 1;
                    foreach ($data as $key) { ?>
                        <tr>
                            <td>
                                <?php echo $No;
                                $No++; ?>
                            </td>
                            <td><?php echo $key['id']; ?></td>
                            <td><?php echo $key['kd_dosen']; ?></td>
                            <td><?php echo $key['kd_matkul']; ?></td>
                            <td><?php echo $key['ruang']; ?></td>
                            <td><?php echo $key['waktu']; ?></td>
                            <td><a href="edit.php?id=<?php echo $key['id'] ?>">Edit</a> || <a href="delete.php?id=<?php echo $key['id'] ?>">Delete</a></td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>