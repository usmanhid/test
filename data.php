<?php

include("koneksi.php");

$sql = mysqli_query($host, "SELECT * FROM karyawan");

while($data = mysqli_fetch_array($sql)){

    // $records = mysqli_query( $host, "SELECT Klasifikasi()" );
    // $records = mysqli_query($host, "SELECT Klasifikasi()");
    $karya[] = [
        "Nama"=>$data["nama"],
        "Jabatan"=>$data["jabatan"],
        "Penilaian"=>$data["penilaian"],
        "Grade"=>$records
       
    ];

// var_dump($records);
}

echo json_encode($karya);






?>