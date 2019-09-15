<h3>Vista estudiantes</h3>

<?php // namespace controlador\estudiantes();
// use mysqli ;
$datos = $estudiantes->index();

while ($fila = mysqli_fetch_array($datos)) {
   echo $fila["nombre"];
}
?>
