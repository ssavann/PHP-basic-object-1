<?php 
class Membre{
	private $id = 5;		
	
	public function getId(){
		//retourner et afficher la propriété $id
		return $this->id;
	}


	public function setId( int $id){
		//modifier la valeur de propriété $id
		$this->id = $id;		//pour associer la variable $id à '$this->id'
	}
}

//ici on est à l'extérieur de la classe 
$membre = new Membre;	//permet de créer une nouvelle instance

$membre->setId( 8 );	//permet de changer la valeur de '5' à '8'

echo $membre->getId();	//permet d'afficher la valeur

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>