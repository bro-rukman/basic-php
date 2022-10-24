<?php
include("class_dosen.php");
$dosen = new class_dosen;
$data = $dosen->getAllDataDosen();
$header = array("No", "Kode Dosen", "Nama", "Alamat");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
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
        <h1>Dosen</h1>
        <p><a href="tambah.php"><button>Tambah Data</button></a></p>
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
                    <th>
                        <?php
                        $No = 0;
                        foreach ($data as $key) { ?>
                    <td><?php echo $key['id']; ?></td>
                    <td><?php echo $key['kd_dosen']; ?></td>
                    <td><?php echo $key['nama']; ?></td>
                    <td><?php echo $key['alamat']; ?></td>
                <?php }
                ?>
                </th>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>