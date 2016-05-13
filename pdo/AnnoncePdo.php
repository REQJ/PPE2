<?php
class AnnoncePdo extends MyPdo
{
	public static function getAll(){
              try
		{ 
                self::open();
		$reponse = self::$connection->query('SELECT * FROM annonce');
		$resultat = array();
		
		$resultat = $reponse->fetchAll();
		
		return $resultat;
                
                } 
                catch (PDOException $ex) {
                    echo 'Échec requete : ' . $ex->getMessage();
              }
 	}

	public static function getOne($id){
              try
		{
                  self::open();
              
		$reponse = self::$connection->query('SELECT * FROM annonce where id_annonce='.$id);
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
                     setlocale(LC_TIME, 'fra_fra');
                        $date=strftime('Le %d-%m-%y à %H:%M');  // Le 29/04/2016 à 11:07
                        self::open();
			$requete = self::$connection->prepare('INSERT INTO annonce(titre_annonce, date_annonce, description_annonce, nbvue_annonce, actif_annonce, auteur_annonce, date_modif_annonce) VALUES(:titre,:date,:desc,:nbvue,:actif,:auteur,:datemod)');
                        $requete->bindValue(':titre', $uneAnnonce["titre"], PDO::PARAM_STR);
                        $requete->bindValue(':date', $uneAnnonce["date"], PDO::PARAM_STR);
                        $requete->bindValue(':desc', $uneAnnonce["desc"], PDO::PARAM_STR);
                        $requete->bindValue(':nbvue', $uneAnnonce["nbvue"], PDO::PARAM_STR);
                        $requete->bindValue(':actif', $uneAnnonce["actif"], PDO::PARAM_STR);
			$requete->bindValue(':auteur', $uneAnnonce["auteur"], PDO::PARAM_STR);
                        $requete->bindValue(':datemod', $uneAnnonce["datemod"], PDO::PARAM_STR);
                        
			$requete->execute();
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
        
  	public static function update($uneAnnonce){
 		try
		{
                        self::open();
			$requete = self::$connection->prepare('update annonce set titre_annonce=:titre, description_annonce=:desc, date_annonce=:date, nbvue_annonce=:nbvue, actif_annonce=:actif, auteur_annonce=:auteur, date_modif_annonce=:datemod where id_annonce=:id');
                        $requete->bindValue(':titre', $uneAnnonce["titre"], PDO::PARAM_STR);
                        $requete->bindValue(':date', $uneAnnonce["date"], PDO::PARAM_STR);
                        $requete->bindValue(':desc', $uneAnnonce["desc"], PDO::PARAM_STR);
                        $requete->bindValue(':nbvue', $uneAnnonce["nbvue"], PDO::PARAM_STR);
                        $requete->bindValue(':actif', $uneAnnonce["actif"], PDO::PARAM_STR);
			$requete->bindValue(':auteur', $uneAnnonce["auteur"], PDO::PARAM_STR);
                        $requete->bindValue(':datemod', $uneAnnonce["datemod"], PDO::PARAM_STR);
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
			$requete = self::$connection->prepare('delete from annonce where id_annonce=:id');
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
		$reponse = self::$connection->query("SELECT * FROM annonce where titre_annonce like '%$titre%'");
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
		$reponse = self::$connection->query("SELECT COUNT(id) FROM annonce where titre_annonce like '%$titre%'");
		$resultat = array();
		
		$resultat = $reponse->fetchAll();
		
		return $resultat;
                
                } catch (PDOException $ex) {
                echo 'Échec requete : ' . $ex->getMessage();
              }
 	}
} 