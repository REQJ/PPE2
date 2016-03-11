<?php
class UserPdo extends MyPdo
{
 	public function __construct(){
		try
		{
			parent::__construct();
		}
		catch (PDOException $e) {
		    echo 'Échec lors de la connexion : ' . $e->getMessage();
		}
 	} 



 	public function create($unUser){
 		try
		{
			$requete =$this->connection->prepare('INSERT INTO user(login, password) VALUES(:login,:password)');
			$requete->bindValue(':login', $unUser->login, PDO::PARAM_STR);
			$requete->bindValue(':password', $unUser->password, PDO::PARAM_STR);
			$requete->execute();
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}

 	public function check($unUser){
 		try
		{
			$requete =$this->connection->prepare('SELECT count(*) as nb FROM user WHERE login=:login AND password=:password');
			$requete->bindValue(':login', $unUser->login, PDO::PARAM_STR);
			$requete->bindValue(':password', $unUser->password, PDO::PARAM_STR);
			$requete->execute();
			$ligne = $requete->fetch();
			return $ligne["nb"];
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	} 	
} 