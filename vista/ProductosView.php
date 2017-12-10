<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>Titulo de la web</title>
<meta charset="utf-8" />
<style>
    html{font-family: Verdana,sans-serif;}
    th {background-color:#000;color:#fff;}
    th, td {border-bottom: 1px solid #ddd;}
    tr:hover {background-color: #f5f5f5;cursor:pointer;}
</style>
</head>
 
<body>

<table>
    <tr>
        <th>Sección</th>
        <th>Código</th>
    </tr>

    <?php 
        foreach($matrizProductos as $reg){
            echo "<tr>";
            echo "<td>" . $reg["name"] . "</td>";
            echo "<td>" . $reg["code"] . "</td>";
            echo "</tr>";
        }
    ?>
<table>
</body>
</html>