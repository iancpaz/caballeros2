<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<title>armas</title>
</head>
<body>
<table>
<tr>
<td>id</td>
<td>daño</td>
<td>tipo</td>
</tr>
<?php
foreach ($datos as $dato) {
echo "<tr><td>".$dato['id']."</td>";
echo "<td>".$dato['daño']."</td>";
echo "<td>".$dato['tipo']."</td></tr>";
}
?>
</table>

</body>
</html>