<?php
include("class_matkul.php");
$data = new class_matkul;
$data->deleteById($_GET['kd_matkul']);
header("location:index.php");
