<?php
$user = "tAH072JVn5";
$pass = "1oQFfIdALL";
$host = "remotemysql.com";
$connection = mysqli_connect($host, $user, $pass);
if(!$connection) {
    echo "No se ha podido conectar con el servidor" . mysql_error();
};
$datab = "tAH072JVn5";
$db = mysqli_select_db($connection,$datab);
if (!$db){
    echo "No se ha podido encontrar la Tabla";
};
$consulta = "SELECT * FROM Usuario";
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>nombre</th></h1>";
echo "<th><h1>apellido</th></h1>";
echo "<th><h1>cedula</th></h1>";
echo "<th><h1>email</th></h1>";
echo "<th><h1>curso</th></h1>";

echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['nombre']. "</td></h2>";
    echo "<td><h2>" . $colum['apellido'] . "</td></h2>";
	echo "<td><h2>" . $colum['cedula'] . "</td></h2>";
    echo "<td><h2>" . $colum['email'] . "</td></h2>";
	echo "<td><h2>" . $colum['curso'] . "</td></h2>";
	echo "</tr>";
}
echo "</table>";
mysqli_close( $connection );

   
?>