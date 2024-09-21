<?php
    $b = 1;
    $a = 2;
    echo 'b = '.$b.PHP_EOL;
    echo 'a = '.$a.PHP_EOL;
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    echo 'b = '.$b.PHP_EOL;
    echo 'a = '.$a.PHP_EOL;
?>

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/reverse_variables.php