
<?php
   
   echo "Minha mensagem \n";
    echo "<br>";
    echo "<h1>Meu HTML</h1>";

    $nome = "Fabrício";
    $idade = 19;
    $altura = 1.76;
    $solteiro = true;

    $prova1= 8;
    $prova2= 7.5;
    $soma= $prova1 + $prova2;
    $media = $soma / 2;

    $multiplicacao= $prova1 * $prova2;
    $subtracao= $prova1 - $prova2;

    const nomecompleto = "Fabrício Pereira de Abreu";
    echo "<p>".nomecompleto. "<p>";

    $faltas = 21;

    if($media >=6 && $faltas<=20){

        echo "<br>Aprovado"."<br>";
    }
    else{
        echo "<br>Reprovado"."<br>";
    }

    # != Diferente
    # == Igual
    # > Maior
    # < Menor
    # >= Maior e igual
    # <= Menor e igual
    # === mesmo conteudo e mesmo tipo
    
    $valor = 10;

    #valor + valor + 5;

    $valor += 5;
    $valor -= 7;
    $valor *= 2;
    $valor /= 1;

    #incremento para laço de repetição

    $valor += 1;

    #resto da divisão (MOD)

    $resto = 4 % 2;
echo "<p>";
//se for par ou impar
    if($valor % 2 == 0){
echo "par";
    }
    else{
echo "impar";
    }
    echo "</p>";
    //incremento e decremento 1 em 1
    $cont = 0;
    $cont++;
    $cont--;

    do{
        //faça
        $cont++;
        echo $cont."<br>";
    }
    while($cont<10);
  
    while($cont<10){
        //faça
    }

    for($i = 1; $i < 5197; $i++){
     if($i % 2 == 0){
         echo $i." é par<br>";
     }  
     else{
         echo $i. " é impar<br>";
     }
    }
?>
