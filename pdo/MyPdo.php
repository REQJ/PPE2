<?php
class MyPdo
{
	protected $connection;
 
 	public function __construct(){

		try
		{
			$this->connection = new PDO('mysql:host=localhost;dbname=si6;charset=utf8', 'root', '');
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e) {
    		echo 'Échec lors de la connexion : ' . $e->getMessage();
		}

 	} 
} 