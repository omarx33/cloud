<?php

try {

//conexion
$conexion =  new PDO(

'sqlsrv:Server=cerberodigital.com;database=testsql',
'sa',
'Sqlsrv2020',
array(

PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAME UTF8'
)

);

$conexion->setAttribute(

PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION

);

//Query
$query =  "
SELECT
* FROM usuario";
$statement = $conexion->prepare($query);
$statement->execute();

//Array
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);


} catch (Exception $e) {

echo "Error: ".$e->getMessage();

}





 ?>
