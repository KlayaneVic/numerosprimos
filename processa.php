<?php
    $numero = $_POST['numero'];
    $divisores = 0;
    for ($i=1; $i<=$numero; $i++) { 
        if($numero%$i==0){
            $divisores++;
        }
    }

    if ($divisores == 2) {
        echo "É numero Primo!";
    }else {
        echo "Não é numero primo!";
    }
?>