<?php
    
    $Province_con = 1;
    if(!empty($_POST['province_con'])){
        $Province_con = $_POST['province_con'];
    }

    $api = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
    $data = json_decode($api, true);

    $province = ($data[$Province_con]["province"]);
    $total_case = ($data[$Province_con]["total_case"]);
    echo ($province. "<br>");
    echo ("ผู้ติดเชื้อ :");
    echo number_format ($total_case)


?>

