<?php

$file = fopen("try.txt", "w") or die("Unable to open");

fwrite($file, "my name is muiz");
fclose($file);
?>