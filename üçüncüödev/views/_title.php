<?php
$activeMovies = [];


foreach (getData()['movies'] as $movie) {
    
    if ($movie['is-active'] === true) {
        $activeMovies[] = $movie;
    }
}

  
 
    
    $ozet = count(getData()["categories"]).' kategoride '.count($activeMovies).'  film listelenmiştir';
    const baslik = "Popüler Filmler";
?>
    
<h1 class="mb-4"><?php echo baslik?></h1>
<p class="text-muted">
    <?php echo $ozet?>
</p>