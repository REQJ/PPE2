<?php
class News
{
	public $id;
	public $titre;
	public $description;
	public $dte;
 
 	public function __construct(){
 		//initialisation de la date avec la date du jour
 		$this->dte=new DateTime('NOW');
 	} 

  	public function afficher()
 	{
 		return $this->id. " ! ".$this->titre. " ! Le ".$this->dte->format('Y-m-d');
 	}  

 	public function dteFr()
 	{
 		return $this->dte->format('d/m/Y');
 	}
} 
    
