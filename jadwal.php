<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
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
    </style>
</head>

<body>
    <h1>Jadwal</h1>
    <div class="fluid">
        <div class="container">
            <form action="#" method="POST">
                <label for="kd_dosen">Kode Dosen</label>
                <input type="text" name="kd_dosen" placeholder="Kode Dosen">
                <label for="kd_jadwal">Kode Jadwal</label>
                <input type="text" name="kd_jadwal" placeholder="Kode Jadwal">
                <label for="ruang">Ruang</label>
                <input type="text" name="ruang" placeholder="Ruang">
                <label for="waktu">Waktu</label>
                <input type="text" name="waktu" placeholder="Waktu">
                <button type="submit">Tambah Jadwal</button>
            </form>
        </div>
    </div>
</body>

</html>