<?php
class PhotoPdo extends MyPdo
{
	public static function getAll($id){
            try
		{ 
                self::open();
		$reponse = self::$connection->query('SELECT * FROM photo where fk_nouvelle_id='.$id);
		$resultat = array();
		
		$resultat = $reponse->fetchAll();
		
		return $resultat;
                
                } 
            catch (PDOException $ex){
                echo 'Échec requete : ' . $ex->getMessage();
            }
 	}

	public static function getOne($id){
              try
		{
                  self::open();
              
		$reponse = self::$connection->query('SELECT * FROM photo where id_photo='.$id);
                $unePhoto = $reponse->fetch();
		
		$reponse->closeCursor(); 
		return $unePhoto;
                
                } catch (PDOException $ex) {
                echo 'Échec requete : ' . $ex->getMessage();
              }
 	}
        
        public static function create($unePhoto){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('INSERT INTO photo(titre_photo, chemin_photo, fk_annonce_id) VALUES(:titre,:chemin,:fk_annonce_id)');
                        $requete->bindValue(':titre', $unePhoto["titre"], PDO::PARAM_STR);
			$requete->bindValue(':chemin', $unePhoto["chemin"], PDO::PARAM_STR);
                        $requete->bindValue(':fk_annonce_id', $unePhoto["fk_annonce_id"]);
			$requete->execute();
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
        
  	public static function update($unePhoto){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('update photo set titre_photo=:titre, chemin_photo=:chemin where id_photo=:id');
                        $requete->bindValue(':id', $unePhoto["id"], PDO::PARAM_STR);
                        $requete->bindValue(':titre', $unePhoto["titre"], PDO::PARAM_STR);
			$requete->bindValue(':texte', $unePhoto["commentaire"], PDO::PARAM_STR);
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
			$requete = self::$connection->prepare('delete from photo where id_photo=:id');
                        $requete->bindValue(':id', $id);
			$requete->execute();
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
} 