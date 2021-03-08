<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
</head>
<body background="Asset/Background/bgbody.jpg" width:"auto" height:"auto">    
        <div class="box">
            <img class="gambar" src="Asset/Profile Picture/img1.png" style="width: 20%;">
        <div class="details">
            <h2 style="font-size: 225%;">Personal Information</h2>
            <p style="font-size: 160%;">087786863182</p>
            <p style="font-size: 160%;">andre_rizki@student.ub.ac.id</p>
            <p style="font-size: 160%;"><a href="https://github.com/Andrerizki454">https://github.com/Andrerizki454</a> </p>
            <button style="font-size: 160%;" onclick="myFunction()">Click here for Linkedin profile</button>
            <script>
            function myFunction() {
            location.replace("https://www.linkedin.com/in/andre-rizki-haryuaditya-119498157/")
            }
            </script>
        </div>
        <div class="details2">
            <h2>Mahasiswa Teknik Komputer</h2>
            <h2>Universitas Brawijaya</h2>
            <h2>Indonesia</h2>
        </div>
            <img class="icon1" src="Asset/Icon/wa.png" style="width: 4%;">
            <img class="icon2" src="Asset/Icon/email.png" style="width: 4%;">
            <img class="icon3" src="Asset/Icon/github.png" style="width: 4%;">
            <img class="icon4" src="Asset/Icon/linked.png" style="width: 4%;">
    </div>
    <div class="box2">
        <div class="about">
            <h1 style="font-size: 300%;">Tentang saya</h1>
            <p style="font-size: 160%;">Saya seorang Mahasiswa Teknik Komputer di Universitas Brawijaya. Saat ini saya sedang berada di semester 6. Saya memiliki skill yang cukup baik dalam Arduino, IoT dan juga pemrograman C++. Saya orang yang suka dalam mempelajari hal baru maupun wawasan baru.</p>
            <h1 style="font-size: 300%;">Skill</h1>
            <ul class="skill">
                <li>C++</li>
                <li>C</li>
                <li>Arduino</li>
                <li>IoT</li>
                <li>Pascal</li>
                <li>Assembly</li>
            </ul>
        </div>
    </div>
    <div class="box3">
        <p style="font-size: 160%;">Permainan Gunting, Batu, dan Kertas</p>
<?php
date_default_timezone_set("Asia/Bangkok");
$a = date("H");

if ($a <= "9"){
    echo "Selamat Pagi";
}elseif($a <= "13"){
    echo "Selamat Siang";
}elseif($a <= "18"){
    echo "Selamat Sore";
}else{
    echo "Selamat Malam";
}
?>
    <form action="" method="post">
    <p>Silahkan pilih:</p>
    <button class="pilihan1" value="Gunting" name="pilihan"> Gunting </button>
    <button class="pilihan2" value="Batu" name="pilihan"> Batu </button>
    <button class="pilihan3" value="Kertas" name="pilihan"> Kertas </button>
<?php
if(isset($_POST['pilihan'])):
    if($_POST['pilihan']){
}
    else if(!$_POST['pilihan']){
}
    $pilihan = $_POST['pilihan'];
    $bkg= array('Gunting', 'Batu', 'Kertas');
    $acak= rand(0,2);
    $ai=$bkg[$acak];
    echo "<br><br>";
    echo "Pilihan anda: ".$pilihan."<br><br>";
    echo "Komputer memilih: ". $ai ."<br><br>";
    if ($pilihan == $ai){
    echo "Wow, anda seri";
    }
    else if($pilihan == 'Batu' && $ai == 'Gunting'){
        echo "Selamat, anda menang";
    }
    else if($pilihan == 'Batu' && $ai == 'Kertas'){
        echo "Yahhh, anda kalah";
    }
    else if($pilihan == 'Gunting' && $ai == 'Batu'){
        echo "Yahhh, anda kalah";
    }
    else if($pilihan == 'Gunting' && $ai == 'Kertas'){
        echo "Selamat, anda menang";
    }
    else if($pilihan == 'Kertas' && $ai == 'Batu'){
        echo "Selamat, anda menang";
    }
    else if($pilihan == 'Kertas' && $ai == 'Gunting'){
        echo "Yahhh, anda kalah";
    }
    endif;
?>
        </div>
</body>
</html>