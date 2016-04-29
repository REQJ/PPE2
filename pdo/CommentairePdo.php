<?php
class CommentairePdo extends MyPdo
{
	public static function getAll($id){
              try
		{ 
                self::open();
		$reponse = self::$connection->query('SELECT * FROM commentaire where fk_annonce_id='.$id);
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
              
		$reponse = self::$connection->query('SELECT * FROM commentaire where id='.$id);
                $uneAnnonce = $reponse->fetch();
		
		$reponse->closeCursor(); 
		return $uneAnnonce;
                
                } catch (PDOException $ex) {
                echo 'Échec requete : ' . $ex->getMessage();
              }
 	}
        
        public static function create($unCommentaire){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('INSERT INTO commentaire(titre, texte, fk_annonce_id) VALUES(:titre,:texte,:fk_annonce_id)');
                        $requete->bindValue(':titre', $unCommentaire["titre"], PDO::PARAM_STR);
			$requete->bindValue(':texte', $unCommentaire["commentaire"], PDO::PARAM_STR);
                        $requete->bindValue(':fk_annonce_id', $unCommentaire["fk_annonce_id"]);
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
        
  	public static function update($unCommentaire){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('update commentaire set titre=:titre, texte=:texte where id=:id');
                        $requete->bindValue(':id', $unCommentaire["id"], PDO::PARAM_STR);
                        $requete->bindValue(':titre', $unCommentaire["titre"], PDO::PARAM_STR);
			$requete->bindValue(':texte', $unCommentaire["commentaire"], PDO::PARAM_STR);
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
			$requete = self::$connection->prepare('delete from commentaire where id=:id');
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