<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario actualizar</title>
</head>
<body>
<form action="modificar.php" method="post">
            <h3>Dime un nombre</h3>
            <input type="text" name="nombre" id="total" placeholder="Dime un nombre">
            <h3>Dime un apellido</h3>
            <input type="text" name="apellido" id="total" placeholder="Dime un apellido">
            <h3>Dime una edad</h3>
            <input type="number" name="edad" id="total">
            <br><br>
            <input type='hidden' name='email' value="">
            <input type="submit" value="Enviar" name="submit">
        </form>
    
</body>
</html>
