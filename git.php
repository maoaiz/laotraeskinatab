<?php
$git = "git push ";
exec($git,$salida);
foreach($salida as $line) {
    echo "$line<br>";
}


?>
