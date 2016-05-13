<?php
class LienPdo extends MyPdo
{
	public static function getAll(){
              try
		{ 
                self::open();
		$reponse = self::$connection->query('SELECT * FROM lien');
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
              
		$reponse = self::$connection->query('SELECT * FROM lien where id_lien='.$id);
                $unLien = $reponse->fetch();
		
		$reponse->closeCursor(); 
		return $unLien;
                
                } catch (PDOException $ex) {
                echo 'Échec requete : ' . $ex->getMessage();
              }
 	}
        
        public static function create($unLien){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('INSERT INTO lien(nom_lien, url_lien, pochette_lien) VALUES(:nom,:url,:pochette)');
                        $requete->bindValue(':nom', $unLien["nom"], PDO::PARAM_STR);
                        $requete->bindValue(':url', $unLien["url"], PDO::PARAM_STR);
                        $requete->bindValue(':pochette', $unLien["pochette"], PDO::PARAM_STR);
			$requete->execute();
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
        
  	public static function update($unLien){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('update lien set nom_lien=:nom, url_lien=:url, pochette_lien=:pochette where id_lien=:id');
                        $requete->bindValue(':nom', $unLien["nom"], PDO::PARAM_STR);
                        $requete->bindValue(':url', $unLien["url"], PDO::PARAM_STR);
                        $requete->bindValue(':pochette', $unLien["pochette"], PDO::PARAM_STR);
             
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
			$requete = self::$connection->prepare('delete from lien where id_lien=:id');
                        $requete->bindValue(':id', $id);
			$requete->execute();
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
	
	
} 