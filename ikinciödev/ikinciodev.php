
<?php

    $kategori = array("Macera","Dram","Komedi","Korku","Bilim Kurgu");

    array_push($kategori,"Fantastik");
    sort($kategori);

    


    $filmler = array(
        "1" => array(
            "baslik" => "Paper Lives",
            "aciklama" => ucfirst(substr("Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",0,50))."...",
            "resim" => "1.jpeg",
            "yorumSayisi" => "0",
            "begeniSayisi" => "Beğeni: 85",
            "vizyon" => true,
            "url"=>'Paper-Lives',
            
            
            
        ),
        "2" => array(
            "baslik" => "Walking Dead",
            "aciklama" => ucfirst(substr("Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",0,50))."...",
            "resim" => "2.jpeg",
            "yorumSayisi" => "55",
            "begeniSayisi" => "0",
            "vizyon" => false,
            "url"=>'Walking-Dead'
            
        ),
        "3" => array(
            "baslik" => "Walking Dead",
            "aciklama" => ucfirst(substr("Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",0,50))."...",
            "resim" => "2.jpeg",
            "yorumSayisi" => "55",
            "begeniSayisi" => "0",
            "vizyon" => false,
            "url"=>"Walking-Dead"
            
        ),
        "4" => array(
            "baslik" => "Walking Dead",
            "aciklama" => ucfirst(substr("Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",0,50))."...",
            "resim" => "2.jpeg",
            "yorumSayisi" => "55",
            "begeniSayisi" => "0",
            "vizyon" => false,
            "url"=>'Walking-Dead'
            
        )
        );
        function filmEkle(&$filmler,string $baslik,string $aciklama,string $resim,int $yorumSayisi = 0,int $begeniSayisi = 0,bool $vizyon = false, $url = "demo"){
            $new_item[count($filmler) + 1] = array(
                "baslik" => $baslik,
                "aciklama" => $aciklama,
                "resim" => $resim,
                "yorumSayisi" => $yorumSayisi,
                "begeniSayisi" => $begeniSayisi,
                "vizyon" => $vizyon,
                "url" => $url
            );

            $filmler = array_merge($filmler, $new_item);
        }

        filmEkle($filmler, "Yeni Film 1","ilk açıklama","1.jpeg");
        filmEkle($filmler, "Yeni Film 2","ikinci açıklama","2.jpeg");
        const limit = 85;
    // $yeni_film = array(
    //     "baslik" => "Lucifer",
    //         "aciklama" => ucfirst(substr("Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",0,50))."...",
    //         "resim" => "_3.jpeg",
    //         "yorumSayisi" => "Yorum: 55",
    //         "begeniSayisi" => "Beğeni: 85",
    //         "vizyon" => "Viyonda: Evet",
    //         "url"=>"<a href='/'>Lucifer<a/>"
    //             );
    
    // $filmler["0"] = $yeni_film;

    

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
                <?php
                foreach($kategori as $kategoriler):?>
                    <?php echo '<li class= "list-group-item">'.$kategoriler.'</li>' ?>
                    <?php endforeach; ?>
                
            
                </ul>
            </div>
            <div class="col-9">
            <?php  foreach($filmler as $id => $film): ?> 
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-3">
                                <img class="img-fluid" src="img/<?php echo $film["resim"]?>">                          
                            </div>
                            <div class="col-9">
                                <div class="card-body">                        
                                    <h5 class="card-title"><a href="<?php echo $film["url"]?>"><?php echo $film["baslik"]?></a></h5>
                                    <p class="card-text"><?php echo $film['aciklama'];?></p>
                                    <div>
                                        <?php if($film["yorumSayisi"] > 0): ?>  
                                            <span class="badge bg-primary me-1"><?php echo $film["yorumSayisi"]?> yorum</span>
                                        <?php endif; ?>

                                        <span class="badge bg-primary me-1"><?php echo $film["begeniSayisi"]?> beğeni</span>

                                        <span class="badge bg-warning me-1">                                            
                                            <?php if ($film["vizyon"]): ?>
                                                <span>vizyonda</span>
                                            <?php else: ?>
                                                <span>vizyonda değil</span>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</body>
</html>
