<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>
<body>
    <h1>Operaciones aritméticas</h1>
    <form action="controlador.php" method="post">
        <label for="">Numero 1</label>
        <input type="number" name="num1">
        <label for="">Numero 2</label>
        <input type="number" name="num2">
        <label for="">Operación</label>
        <select name="opcion" >
            <option value="+">suma</option>
            <option value="-">resta</option>
            <option value="*">multiplicación</option>
            <option value="/">división</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>