<?php

$file_name = "";
$html = "";
$myfile = fopen("perros", "r") or die("Unable to open file!");
// Output one line until end-of-file
while (!feof($myfile)) {
    $file_name = rtrim(fgets($myfile));
    $html .= '<div class="col-lg-4 col-md-6 col-xs-12 mix royal dogs">
    <div class="portfolio-item">
        <div class="shot-item">
            <img src="img/producto/royalcanin/perros/' . $file_name . '" alt=""> 
        </div>               
    </div>
</div>';
}
fclose($myfile);

echo $html;
