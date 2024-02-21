<?php
 //fiz a calculadora primeiro e depois vi a aula e fui corrigindo//
$num1 = 0;
$num2 = 0;
$resultado = 0;
$calcular = 'somar';
    //comecei pelo htlm e depois fiz os calculos para php//
if (isset($_GET['num1'], $_GET['num2'], $_GET['calcular'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $calcular = $_GET['calcular'];

    switch ($calcular) {
        case 'somar':
            $resultado = $num1 + $num2;
            break;
        case 'subtrair':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicar':
            $resultado = $num1 * $num2;
            break;
        case 'dividir':
            $resultado = $num1 / $num2;
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <form method="get">
        Primeiro Número <br />
        <input type="number" name="num1" value="<?= $num1 ?>" required/><br />
        Segundo Número <br />
        <input type="number" name="num2" value="<?= $num2 ?>" required/><br /><br />
        <select name="calcular">
            <option value="somar">+</option>
            <option value="subtrair">-</option>
            <option value="multiplicar">*</option>
            <option value="dividir">/</option>
        </select>
        <br /><br />
        <input type="submit" value="Calcular"/>
        <br /><br />
        <p>O resultado é <?= $resultado ?></p>
    </form>
</body>

</html>

