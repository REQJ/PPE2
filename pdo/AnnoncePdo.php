<?php
class AnnoncePdo extends MyPdo
{
	public static function getAll(){
              try
		{ 
                self::open();
		$reponse = self::$connection->query('SELECT * FROM annonces');
		$resultat = array();
		
		$resultat = $reponse->fetchAll();
		
		return $resultat;
                
                } catch (PDOException $ex) {
                echo 'Échec requete : ' . $ex->getMessage();
              }
 	}

	public static function getOne($id){
              try
		{
                  self::open();
              
		$reponse = self::$connection->query('SELECT * FROM annonces where id='.$id);
                $uneAnnonce = $reponse->fetch();
		
		$reponse->closeCursor(); 
		return $uneAnnonce;
                
                } catch (PDOException $ex) {
                echo 'Échec requete : ' . $ex->getMessage();
              }
 	}
        
        public static function create($uneAnnonce){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('INSERT INTO annonces(titre, description) VALUES(:titre,:description)');
                        $requete->bindValue(':titre', $uneAnnonce["titre"], PDO::PARAM_STR);
			$requete->bindValue(':description', $uneAnnonce["description"], PDO::PARAM_STR);
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
        
  	public static function update($uneAnnonce){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('update annonces set titre=:titre, description=:description where id=:id');
                        $requete->bindValue(':id', $uneAnnonce["id"], PDO::PARAM_STR);
                        $requete->bindValue(':titre', $uneAnnonce["titre"], PDO::PARAM_STR);
			$requete->bindValue(':description', $uneAnnonce["description"], PDO::PARAM_STR);
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
        
        public static function delete($id){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('delete from annonces where id=:id');
                        $requete->bindValue(':id', $id);
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
	
	public static function getSearch($titre){
              try
		{ 
                self::open();
		$reponse = self::$connection->query("SELECT * FROM annonces where titre like '%$titre%'");
		$resultat = array();
		
		$resultat = $reponse->fetchAll();
		
		return $resultat;
                
                } catch (PDOException $ex) {
                echo 'Échec requete : ' . $ex->getMessage();
              }
 	}
	
	public static function getSearchCOUNT($titre){
              try
		{ 
                self::open();
		$reponse = self::$connection->query("SELECT COUNT(id) FROM annonces where titre like '%$titre%'");
		$resultat = array();
		
		$resultat = $reponse->fetchAll();
		
		return $resultat;
                
                } catch (PDOException $ex) {
                echo 'Échec requete : ' . $ex->getMessage();
              }
 	}
} 