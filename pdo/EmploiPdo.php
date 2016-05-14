<?php
class EmploiPdo extends MyPdo
{
	public static function getAll(){
              try
		{ 
                self::open();
		$reponse = self::$connection->query('SELECT * FROM emploi');
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
              
		$reponse = self::$connection->query('SELECT * FROM emploi where id='.$id);
                $uneEpreuve = $reponse->fetch();
		
		$reponse->closeCursor(); 
		return $unEmploi;
                
                } catch (PDOException $ex) {
                echo 'Échec requete : ' . $ex->getMessage();
              }
 	}
        
        public static function create($unEmploi){ // MODIFIER TOUT
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('INSERT INTO emploi(--titre_epreuve, nom_epreuve, description_epreuve, coefficient_epreuve, type_epreuve, --) VALUES(--:titre,:nom,:desc,:coeff,:type,:duree--)');
                        $requete->bindValue(':titre', $uneEpreuve["titre"], PDO::PARAM_STR);
                        $requete->bindValue(':nom', $uneEpreuve["nom"], PDO::PARAM_STR);
                        $requete->bindValue(':desc', $uneEpreuve["desc"], PDO::PARAM_STR);
                        $requete->bindValue(':coeff', $uneEpreuve["coeff"]);
			$requete->execute();
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
        
  	public static function update($unEmploi){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('update emploi set --titre_epreuve=:titre, nom_epreuve=:nom, description_epreuve=:desc, coefficient_epreuve=:coeff, type_epreuve=:type, duree_epreuve=:duree-- where id=:id');
                        $requete->bindValue(':id', $uneEpreuve["id"], PDO::PARAM_STR);
                        $requete->bindValue(':titre', $uneEpreuve["titre"], PDO::PARAM_STR);
                        $requete->bindValue(':nom', $uneEpreuve["nom"], PDO::PARAM_STR);
                        $requete->bindValue(':desc', $uneEpreuve["desc"], PDO::PARAM_STR);
                        $requete->bindValue(':coeff', $uneEpreuve["coeff"]);
			$requete->bindValue(':type', $uneEpreuve["type"], PDO::PARAM_STR);
                        $requete->bindValue(':duree', $uneEpreuve["duree"]);
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
			$requete = self::$connection->prepare('delete from emploi where id=:id');
                        $requete->bindValue(':id', $id);
			$requete->execute();
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
	
	
} 