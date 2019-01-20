<?php

ini_set('allow_url_fopen', 1);
$json = file_get_contents('https://jsonplaceholder.typicode.com/photos');
$obj = json_decode($json);

for ($i = 0; $i < 12; $i++) {
    $url = $obj[$i]->thumbnailUrl;
    $title = $obj[$i]->title;
    $img .= "<div class='col-md-4' style='padding-bottom: 3.5%'>"
            . "<img src='$url' style='width: 100%'>"
            . "<div class='centered mob' style='font-size: 17px'><strong>$title</strong></div>"
            . "</div>";
}
$html['woman'] = "<div class='container'>$img</div>";

for ($j = 12; $j < 24; $j++) {
    $url2 = $obj[$j]->thumbnailUrl;
    $title2 = $obj[$j]->title;
    $img2 .= "<div class='col-md-4' style='padding-bottom: 3.5%'>"
            . "<img src='$url2' style='width: 100%'>"
            . "<div class='centered mob' style='font-size: 17px'><strong>$title2</strong></div>"
            . "</div>";
}
$html['man'] = "<div class='container'>$img2</div>";

echo json_encode($html);