<?php
$git = "ls";
exec($git,$salida);
foreach($salida as $line) {
    echo "$line<br>";
}


?>
