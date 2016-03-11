<?php
class NewsPdo extends MyPdo
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

	public function getAll(){
		$reponse = $this->connection->query('SELECT * FROM news');
		$resultat = array();
		//
		while ($donnees = $reponse->fetch())
		{
			//
	
		  	$resultat[]=$uneNews;
		}
		$reponse->closeCursor(); 
		return $resultat;
 	}

 	public function create($uneNews){
 		try
		{
			$requete =$this->connection->prepare('INSERT INTO news(titre, description, dte) VALUES(:titre,:description,:dte)');
			$requete->bindValue(':titre', $uneNews->titre, PDO::PARAM_STR);
			$requete->bindValue(':description', $uneNews->description, PDO::PARAM_STR);
			$requete->bindValue(':dte', $uneNews->dte->format('Y-m-d'), PDO::PARAM_STR);
			$requete->execute();
			/* ou mais moins pratique
			$req= "INSERT INTO news(titre, description, dte) VALUES('".$uneNews->titre."','".$uneNews->description."','".$uneNews->dte->format('Y-m-d')."')";
			$this->connection->exec($req);
			*/
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
} 