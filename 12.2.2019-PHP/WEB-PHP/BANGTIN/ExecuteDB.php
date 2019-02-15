<?php
function getConnection()
{
	$oConnection = new PDO(
		'mysql:host=localhost;dbname=qltintuc', 
		'root', 
		'', 
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
		
	return $oConnection;

}

function ExecuteSql($sqlClause)
{
	$cnn = getConnection();
	$statement = $cnn->prepare($sqlClause);
	$statement->execute();

	return $statement;
}
