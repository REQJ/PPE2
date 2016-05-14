<?php
class ImagePdo extends MyPdo
{
	public static function getAll($id){
              try
		{ 
                self::open();
		$reponse = self::$connection->query('SELECT * FROM image where id_annonce='.$id);
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
              
		$reponse = self::$connection->query('SELECT * FROM image where id_image='.$id);
                $uneImage = $reponse->fetch();
		
		$reponse->closeCursor(); 
		return $uneImage;
                
                } catch (PDOException $ex) {
                echo 'Échec requete : ' . $ex->getMessage();
              }
 	}
        
        public static function create($uneImage){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('INSERT INTO image(titre_image, chemin_image, id_annonce) VALUES(:titre,:chemin,:fk_annonce_id)');
                        $requete->bindValue(':titre', $uneImage["titre"], PDO::PARAM_STR);
			$requete->bindValue(':chemin', $uneImage["chemin"], PDO::PARAM_STR);
                        $requete->bindValue(':fk_annonce_id', $uneImage["fk_annonce_id"]);
			$requete->execute();
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
        
  	public static function update($uneImage){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('update image set titre_image=:titre, chemin_image=:chemin where id_image=:id');
                        $requete->bindValue(':id', $uneImage["id"], PDO::PARAM_STR);
                        $requete->bindValue(':titre', $uneImage["titre"], PDO::PARAM_STR);
			$requete->bindValue(':chemin', $uneImage["chemin"], PDO::PARAM_STR);
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
			$requete = self::$connection->prepare('delete from chemin where id_image=:id');
                        $requete->bindValue(':id', $id);
			$requete->execute();			
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
	
	
} 