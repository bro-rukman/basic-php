<?php
include("class_jadwal.php");
$jadwal = new class_jadwal;
$data = $jadwal->getAllJadwal();
print_r($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
</head>

<body>

</body>

</html>