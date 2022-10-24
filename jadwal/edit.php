<?php
include("../dosen/class_dosen.php");
include("../matkul/class_matkul.php");
include("class_jadwal.php");
$dosen = new class_dosen;
$matkul = new class_matkul;
$jadwal = new class_jadwal;
$data_dosen = $dosen->distinctDosen();
$data_matkul = $matkul->distinctMatkul();
$data_jadwal = $jadwal->getDataById($_GET['id']);
print_r($data_jadwal);
?>
<?php
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

        div.fluid {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        div.container {
            width: 50%;
            border-radius: 5px;
            padding: 20px;
        }

        input,
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type=submit] {
            width: 100%;
            background-color: blue;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type=submit]:hover {
            background-color: red;
        }
    </style>
</head>

<body>

    <h1>Jadwal</h1>
    <div class="fluid">
        <div class="container">
            <form action="#" method="POST">
                <label for="kd_dosen">Nama Dosen</label>
                <select name="kd_dosen" id="kd_dosen">
                    <?php foreach ($data_dosen as $key) { ?>
                        <option value="<?php echo $key['kd_dosen'] ?>"><?php echo $key['nama'] ?></option>
                    <?php } ?>
                </select>
                <label for="kd_matkul">Mata Kuliah</label>
                <select name="kd_matkul" id="kd_matkul">
                    <?php foreach ($data_matkul as $key) { ?>
                        <option value="<?php echo $key['kd_matkul'] ?>"><?php echo $key['nama'] ?></option>
                    <?php } ?>
                </select>
                <label for="ruang">Ruang</label>
                <input type="text" name="ruang" placeholder="Ruang">
                <label for="waktu">Waktu</label>
                <input type="text" name="waktu" placeholder="Waktu">
                <button type="submit" name="simpan">Tambah Jadwal</button>
            </form>
            <?php
            include("class_jadwal.php");
            $jadwal = new class_jadwal;
            if (isset($_POST['simpan'])) {
                $kd_dosen = $_POST['kd_dosen'];
                $kd_matkul = $_POST['kd_matkul'];
                $ruang = $_POST['ruang'];
                $waktu = $_POST['waktu'];
                $jadwal->addData($kd_dosen, $kd_matkul, $ruang, $waktu);
                header("location:index.php");
            }
            ?>
        </div>
    </div>
</body>

</html>