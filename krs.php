<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>KRS</title>
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
    <h1>KRS</h1>
    <div class="fluid">
        <div class="container">
            <form action="#" method="POST">
                <label for="id">ID</label>
                <input type="text" name="id" placeholder="ID">
                <label for="id_jadwal">Id Jadwal</label>
                <input type="text" name="id_jadwal" placeholder="Id Jadwal">
                <label for="nim">Nim</label>
                <input type="text" name="nim" placeholder="Nim">
                <label for="kd_semester">Kode Semester</label>
                <input type="text" name="kd_semester" placeholder="Kode Semester">
                <button type="submit">Tambah KRS</button>
            </form>
        </div>
    </div>
</body>

</html>