<?php
class CommentairePdo extends MyPdo
{
	public static function getAll($id){
              try
		{ 
                self::open();
		$reponse = self::$connection->query('SELECT * FROM commentaire where id_comm='.$id);
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
              
		$reponse = self::$connection->query('SELECT * FROM commentaire where id_comm='.$id);
                $unCommentaire = $reponse->fetch();
		
		$reponse->closeCursor(); 
		return $unCommentaire;
                
                } 
                catch (PDOException $ex) {
                    echo 'Échec requete : ' . $ex->getMessage();
              }
 	}
        
        public static function create($unCommentaire){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('INSERT INTO commentaire(auteur_comm, date_comm, texte_comm, id_annonce) VALUES(:auteur,:date,:texte,:fk_annonce_id)');
                        $requete->bindValue(':auteur', $unCommentaire["auteur"], PDO::PARAM_STR);
			$requete->bindValue(':date', $unCommentaire["date"], PDO::PARAM_STR);
                        $requete->bindValue(':texte', $unCommentaire["texte"], PDO::PARAM_STR);
                        $requete->bindValue(':fk_annonce_id', $unCommentaire["fk_annonce_id"]);
			$requete->execute();
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
        
  	public static function update($unCommentaire){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('update commentaire set auteur_comm=:auteur, date_comm=:date, texte_comm=:texte where id_comm=:id');
                        $requete->bindValue(':auteur', $unCommentaire["auteur"], PDO::PARAM_STR);
                        $requete->bindValue(':date', $unCommentaire["date"], PDO::PARAM_STR);
			$requete->bindValue(':texte', $unCommentaire["texte"], PDO::PARAM_STR);
			$requete->execute();
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
        
        public static function delete($id){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('delete from commentaire where id_comm=:id');
                        $requete->bindValue(':id', $id);
			$requete->execute();
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
}