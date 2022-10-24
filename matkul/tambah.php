<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
    <style>
        h1 {
            text-align: center;
        }

        input {
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

        div.container {
            width: 50%;
            border-radius: 5px;
            padding: 20px;
        }

        div.fluid {
            width: 100%;
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <h1>Mata Kuliah</h1>
    <div class="fluid">
        <div class="container">
            <form action="#" method="POST">
                <label for="kd_matkul">Kode Mata Kuliah</label>
                <input type="text" name="kd_matkul" placeholder="Kode Mata Kuliah">
                <label for="nama">Nama Mata Kuliah</label>
                <input type="text" name="nama" placeholder="Nama Mata Kuliah">
                <label for="sks">SKS</label>
                <input type="text" name="sks" placeholder="SKS">
                <button type="submit" name="simpan">Tambah Mata Kuliah</button>
            </form>
        </div>
    </div>
    <?php 
    include("class_matkul.php");
    $matkul = new class_matkul;
    if(isset($_POST['simpan'])){
        $matkul->addData($_POST['kd_matkul'],$_POST['nama'],$_POST['sks']);
        header('location:index.php');
    }

    ?>
</body>

</html>