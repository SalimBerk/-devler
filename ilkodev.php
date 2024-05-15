<?php

$kategoriler=array("Macera","Dram","Komedi","Korku");


$filmAdi1 = "Paper Lives";
$ozet1 = "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)";
$yapimTarihi1 = "2021-12-03";
$yorumSayisi1 = 23;
$begeniSayisi1 = 106;
$vizyondaMi1 = true;



$filmAdi2 = "Walking Dead";
$ozet2 = "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.";
$yapimTarihi2 = "2010-10-31";
$yorumSayisi2 = 236;
$begeniSayisi2 = 1023;
$vizyondaMi2 = false;



$filmler=array(array("baslik" => $filmAdi1,
"ozet" => $ozet1,
"yapimTarihi" => $yapimTarihi1,
"yorumSayisi" => $yorumSayisi1,
"begeniSayisi" => $begeniSayisi1,
"vizyondaMi" => $vizyondaMi1),array("baslik" => $filmAdi2,
"ozet" => $ozet2,
"yapimTarihi" => $yapimTarihi2,
"yorumSayisi" => $yorumSayisi2,
"begeniSayisi" => $begeniSayisi2,
"vizyondaMi" => $vizyondaMi2));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ilködev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">




</head>
<body>
<h1>    <?php
    define("baslik1","Ödev1");
    $baslik=baslik1;
    echo $baslik;
    ?></h1>

<?php


    
    $ilkfilm=$filmler[0]["ozet"];
    $ilkfilm=ucfirst($ilkfilm);
    $ilkfilm=substr($ilkfilm,0,50)."...";
     

    $ikincifilm=$filmler[1]["ozet"];
    $ikincifilm=ucfirst($ikincifilm);
    $ikincifilm=substr($ikincifilm,0,50)."...";   
    echo "".$ilkfilm."<br>".""."<br>".$ikincifilm;
    
    echo "<pre>";
    foreach($filmler as $film){
        $url_basligi=strtolower(str_replace(" ","-",$film['baslik']));
        $url="https://www.yenifilmler"."/".$url_basligi;
        echo ""."<br>"."<a href='/'>$url<a/>";
        $film_url=array($url);
        
    }


    echo "</pre>";

    ?>



</body>
</html>