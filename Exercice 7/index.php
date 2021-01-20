<?php


$depHdF = array( 
        "02" => "Aisne", 
        "59" => "Nord", 
        "60" => "Oise", 
        "62" => "Pas de Calais",  
        "80" => "Somme", 
    );

    $depHdF[51] = "Marne";

?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 7 (5) PHP</title>
		<link rel="stylesheet" href="sRnfbNnRwW.css">
	</head>

	<body>
	   <?php 

	       	foreach($depHdF as $dep) {
        		echo '<br>'.$dep;
    		}
    		
	   ?>
	</body>

</html>