<?php

//Foi pedido para fazer uma calculadora que pegasse do is numeros e fizesse uma operação,o diferencial foi utilizar o metodo post

            $operacao = $_POST["operacaoes"];
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css"/>
    <title>Calculadora</title>
</head>
<body>
    <div class="input-group">
    <form method="POST" action="calculadora.php">
        <label for="primeiroNumero">Primero Número:</label>
        <input type="number" min="0" name="numero1" id="primeiroNumero" placeholder="Informar o Primeiro Número" require/>
        
        <label for="segundoNumero">Segundo  Número:</label>
        <input type="number" min="0" name="numero2" id="segundoNumero" placeholder="Informar o Segundo Número" require/>
    
        <label>Informe a Operação</label>
        <div>
            <label for="Soma" id="radioOperacoes">Soma:</label>

            <input type="radio" name="operacaoes" id="Soma" value="soma" style="margin-left: -88px;" require/>
        </div>
        <div>
            <label for="Divisao" id="radioOperacoes">Divisão:</label>
            <input type="radio" name="operacaoes" id="Divisao" value="divisao" style="margin-left: -97px;" require/>
        </div>
        <div>
            <label for="Subtracao" id="radioOperacoes">Subtração:</label>
            <input type="radio" name="operacaoes" id="Subtracao" value="subtracao" style="margin-left: -114px;" require/>
        </div>
        <div>
            <label for="Multiplicacao" id="radioOperacoes">Multiplicação:</label>
            <input type="radio" name="operacaoes" id="Multiplicacao" value="multiplicacao" style="margin-left: -130px;" require/>
        </div>

        

        <?php
        if($operacao == "soma"){
            $calculo = number_format($numero1) + number_format($numero2);
        ?>
            <h1><?=$calculo?></h1>
        <?php
        }else if($operacao == "divisao"){ 
            $calculo = number_format($numero1) / number_format($numero2);
        ?>
        <h1><?=$calculo?></h1>

        <?php
        }else if($operacao == "subtracao"){ 
            $calculo = number_format($numero1) - number_format($numero2);
        ?>
        <h1><?=$calculo?></h1>

        <?php
        }else if($operacao == "multiplicacao"){ 
            $calculo = number_format($numero1) * number_format($numero2);
        ?>
        <h1><?=$calculo?></h1>
        <?php
        }
        ?>
        

        <button>Calcular</button>
        <button type="reset">Limpar</button>
        
    </form>
    </div>
</body>
</html>