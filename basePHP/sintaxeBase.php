<?php
    echo "<pre>"; //formatar e abilita comandos com \n

    $n1 = 10;
    $n2 = 20;

    $soma = $n1 + $n2;
    $subtracao = $n1 - $n2;
    $multiplicacao = $n1 * $n2;
    $divisao = $n1 / $n2;

    
    echo "O Resultado da soma é $soma"; 
    echo "\nO Resultado da subtracao é $subtracao"; 
    echo "\nO Resultado da multiplicacao é $multiplicacao"; 
    echo "\nO Resultado da divisao é $divisao"; 


    $primeiroNome = "Pedro";
    $sobreNome = "Doliwa";
    $nomeCompleto = "$primeiroNome $sobreNome";

    echo "\n\n$nomeCompleto\n";

    $array = ["Pedro","Maria","Daniel","Marcio","Ana"];
    var_dump($array);
    
    krsort($array);
    var_dump($array);

    ksort($array);
    var_dump($array);

    for ($i=1; $i <= 10; $i++) { 
        echo "\n$i";
    }

    foreach ($array as $key => $value) {
        echo "\nChave: $key, valor: $value";
    }

    $array = array_flip($array);    // inverter a chave por valor 
    foreach ($array as $key => $value) {
        echo "\nChave: $key, valor: $value";
    }

    $count = 0;
    do {
        $count++;
    }while($count < 10);

    $count = 0;
    while($count < 10){
        $count++;
    }

?>