<?php
class NouvellePdo extends MyPdo
{
	public static function getAll(){
              try
		{ 
                self::open();
		$reponse = self::$connection->query('SELECT * FROM nouvelle ORDER BY num_nouvelle desc');  //ORDER BY id desc 
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
              
		$reponse = self::$connection->query('SELECT * FROM nouvelle where num_nouvelle='.$id);
                $uneNouvelle = $reponse->fetch();
		
		$reponse->closeCursor(); 
		return $uneNouvelle;
                
                } catch (PDOException $ex) {
                echo 'Échec requete : ' . $ex->getMessage();
              }
 	}
        
        public static function create($uneNouvelle){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('INSERT INTO nouvelle(titre_nouvelle, date_nouvelle, description_nouvelle) VALUES(:titre,:date,:desc)');
                        $requete->bindValue(':titre', $uneNouvelle["titre"], PDO::PARAM_STR);
                        $requete->bindValue(':date', $uneNouvelle["date"], PDO::PARAM_STR);
			$requete->bindValue(':desc', $uneNouvelle["desc"], PDO::PARAM_STR);
			$requete->execute();
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
        
  	public static function update($uneNouvelle){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('update nouvelle set titre_nouvelle=:titre, date_nouvelle=:date, description_nouvelle=:description where id=:id');
                        $requete->bindValue(':titre', $uneNouvelle["titre"], PDO::PARAM_STR);
                        $requete->bindValue(':date', /*date.now,*/ PDO::PARAM_STR);
			$requete->bindValue(':desc', $uneNouvelle["desc"], PDO::PARAM_STR);
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
			$requete = self::$connection->prepare('delete from nouvelle where num_nouvelle=:id');
                        $requete->bindValue(':id', $id);
			$requete->execute();
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
	
	public static function getSearch($titre){
              try
		{ 
                self::open();
		$reponse = self::$connection->query("SELECT * FROM nouvelle where titre_nouvelle like '%$titre%'");
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
		$reponse = self::$connection->query("SELECT COUNT(id) FROM nouvelle where titre_nouvelle like '%$titre%'");
		$resultat = array();
		
		$resultat = $reponse->fetchAll();
		
		return $resultat;
                
                } catch (PDOException $ex) {
                echo 'Échec requete : ' . $ex->getMessage();
              }
 	}
} 