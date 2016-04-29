<?php
class UserPdo extends MyPdo
{

	public static function connexion($login, $mdp){
              try
		{
                  self::open();
             $pass_hache = sha1($mdp);
              var_dump($pass_hache);
		$reponse = self::$connection->query("SELECT * FROM user WHERE login='$login' AND password='$pass_hache'"); // $mdp
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
                      $req = self::$connection->query("SELECT login FROM user WHERE login='$login'");
                      $rep = $req->fetch();
                    //  var_dump($rep);
                      
                        if($rep == true)
                        {
                         $message="Le nom d'utilisateur éxiste déjà !";
                         include(VUES."error.php");
                         header("refresh:2;url=index.php?action=createaccount");
                        }
                        else
                        {                            
			$requete = self::$connection->query("INSERT INTO user(login, password) VALUES('$login','$pass_hache')");
                        $message='Compte créé avec succès !';
                        include(VUES."success.php");    
                        UserPdo::connexion($login, $pass_hache);
                        header("refresh:2;url=index.php?action=login");
                        
                        }                        
                
                } catch (PDOException $ex) {
                echo 'Échec requete : ' . $ex->getMessage();
              }
 	}
} 