<?php
    
    $Province_con = 0;
    if(!empty($_POST['province_con'])){
        $Province_con = $_POST['province_con'];
    }
    // else if(!empty($_POST ['province_con'])){
        
    // }

    $api = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
    $data = json_decode($api, true);

    $province = ($data[$Province_con]["province"]);

    $total_case = ($data[$Province_con]["total_case"]);
    $new_case   = ($data[$Province_con]["new_case"]);

    $total_death = ($data[$Province_con]["total_death"]);
    $new_death   = ($data[$Province_con]["new_death"]);

    $new_case_excludeabroad   = ($data[$Province_con]["new_case_excludeabroad"]);
    $total_case_excludeabroad = ($data[$Province_con]["total_case_excludeabroad"]);

    $txn_date = ($data[$Province_con]["txn_date"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <title>Covid-19</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar navbar-light" style="background-color: #E1EBF8;">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li> -->
                </ul>
                <form class="d-flex" method="POST" action="province.php">
                    <!-- <input class="form-control me-2" type="text" placeholder="Province" name="province_con"> -->
                    <select class="form-select form-select-lg " aria-label=".form-select-lg example"
                        name="province_con">
                        <option selected disabled > กรุณาเลือกจังหวัด </option>
                        <option value="0">กระบี่</option>
                        <option value="1">กรุงเทพมหานคร</option>
                        <option value="2">กาญจนบุรี</option>
                        <option value="3">กาฬสินธุ์</option>
                        <option value="4">กำแพงเพชร</option>
                        <option value="5">ขอนแก่น</option>
                        <option value="6">จันทบุรี</option>
                        <option value="7">ฉะเชิงเทรา</option>
                        <option value="8">ชลบุรี</option>
                        <option value="9">ชัยนาท</option>
                        <option value="10">ชัยภูมิ</option>
                        <option value="11">ชุมพร</option>
                        <option value="12">ตรัง</option>
                        <option value="13">ตราด</option>
                        <option value="14">ตาก</option>
                        <option value="15">นครนายก</option>
                        <option value="16">นครปฐม</option>
                        <option value="17">นครพนม</option>
                        <option value="18">นครราชสีมา</option>
                        <option value="19">นครศรีธรรมราช</option>
                        <option value="20">นครสวรรค์</option>
                        <option value="21">นนทบุรี</option>
                        <option value="22">นราธิวาส</option>
                        <option value="23">น่าน</option>
                        <option value="24">บึงกาฬ</option>
                        <option value="25">บุรีรัมย์</option>
                        <option value="26">ปทุมธานี</option>
                        <option value="27">ประจวบคีรีขันธ์</option>
                        <option value="28">ปราจีนบุรี</option>
                        <option value="29">ปัตตานี</option>
                        <option value="30">พระนครศรีอยุธยา</option>
                        <option value="31">พะเยา</option>
                        <option value="32">พังงา</option>
                        <option value="33">พัทลุง</option>
                        <option value="34">พิจิตร</option>
                        <option value="35">พิษณุโลก</option>
                        <option value="36">ภูเก็ต</option>
                        <option value="37">มหาสารคาม</option>
                        <option value="38">มุกดาหาร</option>
                        <option value="39">ยะลา</option>
                        <option value="40">ยโสธร</option>
                        <option value="41">ร้อยเอ็ด</option>
                        <option value="42">ระนอง</option>
                        <option value="43">ระยอง</option>
                        <option value="44">ราชบุรี</option>
                        <option value="45">ลพบุรี</option>
                        <option value="46">ลำปาง</option>
                        <option value="47">ลำพูน</option>
                        <option value="48">ศรีสะเกษ</option>
                        <option value="49">สกลนคร</option>
                        <option value="50">สงขลา</option>
                        <option value="51">สตูล</option>
                        <option value="52">สมุทรปราการ</option>
                        <option value="53">สมุทรสงคราม</option>
                        <option value="54">สมุทรสาคร</option>
                        <option value="55">สระบุรี</option>
                        <option value="56">สระแก้ว</option>
                        <option value="57">สิงห์บุรี</option>
                        <option value="58">สุพรรณบุรี</option>
                        <option value="59">สุราษฎร์ธานี</option>
                        <option value="60">สุรินทร์</option>
                        <option value="61">สุโขทัย</option>
                        <option value="62">หนองคาย</option>
                        <option value="63">หนองบัวลำภู</option>
                        <option value="64">อ่างทอง</option>
                        <option value="65">อำนาจเจริญ</option>
                        <option value="66">อุดรธานี</option>
                        <option value="67">อุตรดิตถ์</option>
                        <option value="68">อุทัยธานี</option>
                        <option value="69">อุบลราชธานี</option>
                        <option value="70">เชียงราย</option>
                        <option value="71">เชียงใหม่</option>
                        <option value="72">เพชรบุรี</option>
                        <option value="73">เพชรบูรณ์</option>
                        <option value="74">เลย</option>
                        <option value="75">แพร่</option>
                        <option value="76">แม่ฮ่องสอน</option>
                    </select>
                    <button class="btn btn-primary ms-3" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div>
        <h3 class="text-covid">รายงานผู้ติดเชื้อ Covid-19 ของจังหวัด <?php echo ($province);?></h3>
    </div>
    <section class="section">
        <div class="columns is-multiline .is-variable is-2">
            <div class="column is-12">
                <div class="box color-box1">
                    <h2>ติดเชื้อสะสม</h2>
                    <h1><?php echo number_format($total_case);?></h1>
                    <h6> (+<?php echo number_format($new_case);?>)</h6>
                </div>
            </div>
            <div class="column is-8">
                <div class="box color-box2">
                    <h2>หายแล้ว</h2>
                    <h1><?php echo number_format($total_case_excludeabroad);?></h1>
                    <h6> (+<?php echo number_format($new_case_excludeabroad);?>)</h6>
                </div>
            </div>
            <div class="column is-4">
                <div class="box color-box4">
                    <h2>เสียชีวิต</h2>
                    <h1><?php echo number_format($total_death);?></h1>
                    <h6> (+<?php echo number_format($new_death);?>)</h6>
                </div>
            </div>
        </div>

        <div align="right">
            <h5> อัปเดตข้อมูลล่าสุด : <?php echo ($txn_date);?> </h5>
            <h5> ที่มา : <a href="https://covid19.ddc.moph.go.th/">กรมควบคุมโรค</a></h5>
            <h5>
                <br>
                จำนวนผู้เยี่ยมชม : <div id="sfcb8p231n2pyb5sdlxn59t99a1n4jpndtd"></div>
                <script type="text/javascript" src="https://counter2.stat.ovh/private/counter.js?c=b8p231n2pyb5sdlxn59t99a1n4jpndtd&down=async" async></script>
                <noscript>
                    <a href="https://www.freecounterstat.com" title="page counter">
                        <img src="https://counter2.stat.ovh/private/freecounterstat.php?c=b8p231n2pyb5sdlxn59t99a1n4jpndtd" border="0" title="page counter" alt="page counter">
                    </a>
                </noscript>
            </h5>
        </div>
    </section>
</body>

</html>