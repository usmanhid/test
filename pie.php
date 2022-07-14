<?php

    $IPK = array();
    include("koneksi.php");
    $get_data = mysqli_query($host, "SELECT * FROM karyawan");
    while($data = mysqli_fetch_array($get_data)){
        $Nilai = $data['penilaian'];
        
    
    if($Nilai >= 50 && $Nilai <= 70){
        $grade2[] = 'B';
    }
    elseif($Nilai >= 71 && $Nilai <= 90){
        $grade2[]= 'A';
    }
    elseif($Nilai >= 91 && $Nilai <= 100){
        $grade2[] = 'A+';
        
    }
    
    $IPK [] = ["Hasil"=>$grade2
    ];
    
    }
    $IPK = json_encode(array_count_values($grade2));
    echo $IPK;

?>