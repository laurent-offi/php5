<?php


 $depHdF = array( 
        "02" => "Aisne", 
        "59" => "Nord", 
        "60" => "Oise", 
        "62" => "Pas de Calais",  
        "80" => "Somme", 
        ); 

 ?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 10 (5) PHP</title>
		<link rel="stylesheet" href="sRnfbNnRwW.css">
	</head>

	<body>
	   <?php 
			foreach($depHdF as $deptnbm => $dept) {
            	echo "Le département <b>$dept</b> a le numéro <b>$deptnbm</b>. <br>";
       		}
		?>

	</body>

</html>