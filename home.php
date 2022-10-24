<?php
include('validation.php');
?>
<html>

<head>
    <title>Home</title>
    <style>
        h1 {
            text-align: center;
        }

        ul {
            list-style: none;
            display: flex;
            gap: 30px;
            align-items: center;
            justify-content: center;
        }

        li {
            font-size: 18px;
            font-weight: bold;
        }

        a {
            color: #292929;

        }

        p {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Menu</h1>
    <ul>
        <li>
            <a href="./matkul/index.php">Mata Kuliah</a>
        </li>
        <li>
            <a href="user.php">User</a>
        </li>
        <li>
            <a href="mahasiswa.php">Mahasiswa</a>
        </li>
        <li>
            <a href="semester.php">Semester</a>
        </li>
        <li>
            <a href="./jadwal/index.php">Jadwal</a>
        </li>
        <li>
            <a href="krs.php">KRS</a>
        </li>
        <li>
            <a href="./dosen/index.php">Dosen</a>
        </li>
    </ul>
    <p>
        <a href="logout.php"><button>Logout</button></a>
    </p>
</body>

</html>