<?php
#Verifique se uma variável `$existente` foi definida e possui um valor.
$exis = 77;

if (isset($exis) && $exis !== null){
    echo "\$exis está definida e não é null.";
} else{
    echo "\$exis não está definida ou é null.";
}
?>