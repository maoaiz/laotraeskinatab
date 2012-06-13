<?php
$git = "git remote add origin https://github.com/MaoAiz/LaOtraEskina-Tab.git";
$id=exec($git,$salida);
foreach($salida as $line) {
    echo "$line<br>";
}


?>
