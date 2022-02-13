<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Covid-19</title>
</head>

<body>
<?php

$api = file_get_contents("https://static.easysunday.com/covid-19/getTodayCases.json");
$data = json_decode($api, true);

?>

    <div>
        <h1 class="text-covid">CORONAVIRUS IN THAILAND</h1>
    </div>
    <section class="section">
        <div class="columns is-multiline .is-variable is-2">
            <div class="column is-12">
                <div class="box color-box1">
                    <h2>ติดเชื้อสะสม</h2>
                    <h1><?php echo number_format($data["cases"]);?></h1>
                    <h6> (+<?php echo number_format($data["todayCases"]);?>)</h6>
                </div>
            </div>
            <div class="column is-4">
                <div class="box color-box2">
                    <h2>หายแล้ว</h2>
                    <h1><?php echo number_format($data["recovered"]);?></h1>
                    <h6> (+<?php echo number_format($data["todayRecovered"]);?>)</h6>
                </div>
            </div>
            <div class="column is-4">
                <div class="box color-box3">
                    <h2>รักษาอยู่ใน รพ.</h2>
                    <h1><?php echo number_format($data["active"]);?></h1>
                    <h6> (<?php echo number_format($data["NewHospitalized"]);?>)</h6>
                </div>
            </div>
            <div class="column is-4">
                <div class="box color-box4">
                    <h2>เสียชีวิต</h2>
                    <h1><?php echo number_format($data["deaths"]);?></h1>
                    <h6> (+<?php echo number_format($data["todayDeaths"]);?>)</h6>
                </div>
            </div>
        </div>
        <div  align="right">
            <h1> อัปเดตข้อมูลล่าสุด :<?php echo ($data["UpdateDate"]);?> </h1>
            <h1> ที่มา :<?php echo ($data["DevBy"]);?></h1>
        </div>
    </section>

</body>

</html>