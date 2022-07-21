<?php
    $myDir = "C:/xampp/htdocs/2100018429/Pertemuan11/";
    $dir = opendir($myDir);
    echo "Isi Folder (Klik link untuk download) : <br>";
    while ($tmp = readdir($dir)){
        echo "<a href='$tmp' target='_blank'>$tmp<a/><br>";
    }
    closedir($dir);
    ?>