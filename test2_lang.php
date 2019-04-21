<?php

print("coucou");
`cat index.php`;

$homepage = file_get_contents('index.php');
echo $homepage;
?>
