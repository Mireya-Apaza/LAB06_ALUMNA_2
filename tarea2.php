<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tarea 02 - Alumna</title>
</head>
<body>
    
    <form method="post" action="">

    -----------------------------------------
    FABRICA DE GASEOSAS
    -----------------------------------------
    <br>
    Precio actual de la gaseosa de 3L = 11 soles.
    <br>
    Cantidad de unidades adquiridas: <br> <input type="text" name="unidades"><br>        
    Resultados: <br>
    <input type="submit" name="Calcular" value="Calcular">

    </form>
    
<?php

    $precio_actual = 11;

    $rebaja = $precio_actual * 0.95;
    echo "El nuevo precio de la gaseosa es de: ".$rebaja;

?>
<br>
<?php

    $importe = $_POST['unidades'];
        $imp = $importe * $rebaja;
        echo "El importe es de: ".$imp; 

?>
<br>
<?php

    $descuento = $imp * 0.07;
    echo "El descuento es de: ".$descuento;

?>
<br>
<?php

    $imp_pagar = $importe - $descuento;
    echo "El importe a pagar es de: ".$imp_pagar;

?>
<br>
<?php

    $obsequio = $_POST['unidades'];
        $regalo = 2 * $obsequio;
        echo "El total de caramelos es de: ".$regalo;

?>

</body>
</html>