<?php
class UserPdo extends MyPdo
{
///////////////////////------------>>>>>>>>>> CREER UTILISATEUR AVEC FICHIER EXCEL OU CSV -> login mdp prenom nom etc
	public static function connexion($login, $mdp){
              try
		{
                self::open();
                $pass_hache = sha1($mdp);
                //var_dump($pass_hache);
		$reponse = self::$connection->query("SELECT * FROM utilisateur WHERE login_utilisateur='$login' AND mdp_utilisateur='$pass_hache'"); // $mdp
                $unLogin = $reponse->fetch();
		
		$reponse->closeCursor(); 
		return $unLogin;
               
                } catch (PDOException $ex) {
                echo 'Échec requete : ' . $ex->getMessage();
              }
 	}
        
        public static function create($login, $mdp){
              try
		{
                $pass_hache = sha1($mdp);
		//var_dump($pass_hache);
                                                
                    self::open();                        
                    $req = self::$connection->query("SELECT login_utilisateur FROM utilisateur WHERE login_utilisateur='$login'");
                    $rep = $req->fetch();
                    //  var_dump($rep);
                      
                        if($rep == true)
                        {
                            $message="Le nom d'utilisateur éxiste déjà !";
                            include(VUES."error.php");
                          //  header("refresh:2;url=index.php?action=createaccount");
                        }
                        else
                        {                            
                            $requete = self::$connection->query("INSERT INTO utilisateur(login_utilisateur, mdp_utilisateur) VALUES('$login','$pass_hache')");
                            $message='Compte créé avec succès !';
                            include(VUES."success.php");    
                            UserPdo::connexion($login, $pass_hache);
                           // header("refresh:2;url=index.php?action=login"); 
                        }                        
                
                } catch (PDOException $ex) {
                echo 'Échec requete : ' . $ex->getMessage();
              }
 	}
        public static function getPorfolio(){
              try
		{
               
                                                
                    self::open();                        
                    $req = self::$connection->query("SELECT nom_utilisateur, prenom_utilisateur, portfolio_utilisateur FROM utilisateur");
                    $portf = $req->fetch();
                    
                                              
                
                } catch (PDOException $ex) {
                echo 'Échec requete : ' . $ex->getMessage();
              }
 	}
} 