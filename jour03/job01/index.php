<?php
$tbls = [200, 204, 173, 98, 171, 404, 459];

foreach ($tbls as $tbl) {
    if ($tbl % 2 == 1) {
        echo "$tbl est impair" . "</br>";
    } else {
        echo "$tbl est pair" . "</br>";
    }
}
