<?php
class MyPdo
{
	protected  static $connection;
 
 	public static function open(){

		try
		{
                    self::$connection = new PDO('mysql:host=localhost;dbname=ppe2;charset=utf8', 'root', '');
                    self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e) {
    		echo 'Échec lors de la connexion : ' . $e->getMessage();
		}

 	} 
} 