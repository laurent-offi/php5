<?php


    $depHdF = array( 
        "40" => "Landes", 
        "59" => "Nord", 
        "76" => "Seine-Maritime", 
        "14" => "Calvados",  
        "80" => "Somme",
        "85" => "Vendée",
        );

    	$count = count($depHdF);

    if($count > 20) {
    	$count = "20+";
    }

    if($depHdF < 2) {
    	$plural = "département";
    } else {
    	$plural = "départements";
    }
?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 5 (5) PHP</title>
		<link rel="stylesheet" href="sRnfbNnRwW.css">
	</head>

	<body>
		<div class="table-container">
		  <table class="table is-bordered">
		  		<tr>
				    <th>Numéro</th>
			    <th>Départements : <?php echo "($count)"; ?></th>
			  	</tr>
			  	
			  		<?php         

			 		   foreach($array as $depHdF => $departement) {
         				   echo "<tr><td>" . $departement . "</td></tr>";
        			}      

			 		   foreach($depHdF as $dept) {
         				   echo "<tr><td>" . $dept . "</td></tr>";
        			} ?>
		  </table>
		</div>
	</body>

</html>