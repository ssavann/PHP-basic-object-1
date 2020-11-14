<?php 
class Membre{
	public $id = 5;		
	//méthode de visibilité public: peut avoir accès aux données à l'extérieur de la classe et à l'intérieur de la classe
	//méthode de visibilité protected: peut avoir accès aux données via la classe et l'enfant 
	//méthode de visibilité private: peut avoir accès aux données via la classe seulement

}

//ici on est à l'extérieur de la classe 
$membre = new Membre;
echo $membre->id;

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