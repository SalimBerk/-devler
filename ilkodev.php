
<?php

    $kategori = array("Macera","Dram","Komedi","Korku");

    array_push($kategori,"Fantastik");
    sort($kategori);
    function filmUrl($text) {
        $url_basligi=$text;
        $url=$url_basligi;
       
        return "<a href='/'>$url<a/>";
      }
    
      function FilmDesc($text){
        $ilkfilm=$text;
    $ilkfilm=ucfirst($ilkfilm);
    $ilkfilm=substr($ilkfilm,0,50)."...";
    return $ilkfilm;
      }

    $filmler = array(
        "1" => array(
            "baslik" => "Paper Lives",
            "aciklama" => FilmDesc("Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)"),
            "resim" => "./img/_1.jpeg",
            "yorumSayisi" => "Yorum: 55",
            "begeniSayisi" => "Beğeni: 85",
            "vizyon" => "Viyonda: Evet",
            "url"=>filmUrl("Paper Lives")
            
            
            
        ),
        "2" => array(
            "baslik" => "Walking Dead",
            "aciklama" => filmDesc("Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur."),
            "resim" => "./img/_2.jpeg",
            "yorumSayisi" => "Yorum: 55",
            "begeniSayisi" => "Beğeni: 85",
            "vizyon" => "Viyonda: Evet",
            "url"=>filmUrl("Walking Dead")
            
        )
        );

    $yeni_film = array(
        "baslik" => "Lucifer",
            "aciklama" => filmDesc("Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur."),
            "resim" => "./img/_3.jpeg",
            "yorumSayisi" => "Yorum: 55",
            "begeniSayisi" => "Beğeni: 85",
            "vizyon" => "Viyonda: Evet",
            "url"=>filmUrl("Lucifer")
                );
    
    $filmler["0"] = $yeni_film;

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="d-flex p-2 justify-content-center my-2"><h1><?php
    define("baslik1","Ödev1");
    $baslik=baslik1;
    echo $baslik;
    ?></h1></div>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $kategori[0]?></li>
                    <li class="list-group-item"><?php echo $kategori[1]?></li>
                    <li class="list-group-item"><?php echo $kategori[2]?></li>
                    <li class="list-group-item"><?php echo $kategori[3]?></li>
                    <li class="list-group-item"><?php echo $kategori[4]?></li>
                </ul>
            </div>
            <div class="col-9">
                <div class="card mb-3">
                    <div class="row">

                        <div class="col-3">
                            <?php echo
                            "<img class=\"img-fluid\" src=\"img/{$filmler["1"]["resim"]}\">" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $filmler["1"]["baslik"]?></h5>
                                <p class="card-text">
                                <?php echo $filmler["1"]["aciklama"]?>
                                </p>
                                <p><?php echo $filmler["1"]["url"]?></p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success"><?php echo $filmler["1"]["yorumSayisi"]?></span>
                                    <span class="badge bg-success"><?php echo $filmler["1"]["begeniSayisi"]?></span>
                                    <span class="badge bg-success"><?php echo $filmler["1"]["vizyon"]?></span>
                                   

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                        <?php echo
                            "<img class=\"img-fluid\" src=\"img/{$filmler["2"]["resim"]}\">" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $filmler["2"]["baslik"]?></h5>
                                <p class="card-text">
                                <?php echo $filmler["2"]["aciklama"]?>
                                </p>
                                <p><?php echo $filmler["2"]["url"]?></p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success"><?php echo $filmler["2"]["yorumSayisi"]?></span>
                                    <span class="badge bg-success"><?php echo $filmler["2"]["begeniSayisi"]?></span>
                                    <span class="badge bg-success"><?php echo $filmler["2"]["vizyon"]?></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                        <?php echo
                            "<img class=\"img-fluid\" src=\"img/{$filmler["0"]["resim"]}\">" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $filmler["0"]["baslik"]?></h5>
                                <p class="card-text">
                                <?php echo $filmler["0"]["aciklama"]?>
                                </p>
                                <p><?php echo $filmler["0"]["url"]?></p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success"><?php echo $filmler["0"]["yorumSayisi"]?></span>
                                    <span class="badge bg-success"><?php echo $filmler["0"]["begeniSayisi"]?></span>
                                    <span class="badge bg-success"><?php echo $filmler["0"]["vizyon"]?></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
