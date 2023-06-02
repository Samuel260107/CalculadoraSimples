<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculadora Simples</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action='<?php $_SERVER["PHP_SELF"] ?>' method="post">
        <h1> Calculadora Simples </h1>
        <select id="op" name="operacao">
        <option value="1">SOMA</option>
        <option value="2">SUBTRAÇÃO</option>
        <option value="3">MULTIPLICACAO</option>
        <option value="4">DIVISAO</option>
        </select>
        <br>
        <br>
        <label for="num1">Num1: </label>
        <input type="text" name="num1">
        <br>
        <label for="num2">Num2: </label>
        <input type="text" name="num2">
        <br>

        <input type="submit"> <input type="reset" value="reset">
    </form>

    <?php

        if(isset($_POST["operacao"])){
        //Variáveis
        $num1 = 0;
        $num2 = 0;
        $total = 0;

        $op = $_POST["operacao"];

        if($op == "1"){
            //Entrada
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            //Processamento 
            $total = $num1 + $num2;

            //Saída
            echo "<br> <br> <br>";
            echo "<h2>" .$num1. " + " .$num2. " = " .$total. "</h2>";

        }
        if($op == "2"){
            //Entrada
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            //Processamento
            $total = $num1 - $num2;

            //Saída
            echo "<br> <br> <br>";
            echo "<h2>" .$num1. " - " .$num2. " = " .$total. "</h2>";
        }
        if($op == "3"){
            //Entrada
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            //Processamento
            $total = $num1 * $num2;

            //Saída
            echo "<br> <br> <br>";
            echo "<h2>" .$num1. " * " .$num2. " = " .$total. "</h2>";
        }
        if($op == "4"){
            //Entrada
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            //Processamento
            $total = $num1 / $num2;

            //Saída
            echo "<br> <br> <br>";
            echo "<h2>" .$num1. " / " .$num2. " = " .$total. "</h2>";
        }
    }
    ?>
    
</body>
</html>