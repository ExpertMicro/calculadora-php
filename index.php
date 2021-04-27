<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora PHP</title>
</head>
<body>
  <?php if(isset($_GET["total"])) { echo "Resultado: ".$_GET["total"]. "<br><br>";} ?>
  <form action="calculo.php" method="post">
    <label for="n1">
      Número 1:
      <input type="text" name="n1">
    </label>
    <br><br>
    <label for="n2">
      Número 2:
      <input type="text" name="n2">
    </label>
    <br><br>

    Operação: <br>

    <label for="operacao">
      <input type="radio" name="operacao" value="somar">
      Somar
    </label>
    <label for="operacao">
      <input type="radio" name="operacao" value="subtrair">
      Subtrair
    </label>
    <label for="operacao">
      <input type="radio" name="operacao" value="dividir">
      Dividir
    </label>
    <label for="operacao">
      <input type="radio" name="operacao" value="multiplicar">
      Multiplicar
    </label>
    <br><br>
    <input type="submit" value="calcular">
  </form>
</body>
</html>