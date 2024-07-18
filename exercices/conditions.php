<?php

$possible_states = array ("health hazard", "filthy", "dirty", "clean", "immaculate");
$states_index = array_rand($possible_states);

$result= "";


	switch ($states_index){
		case 0:
			$result = "Yuk, this is Dangerous : let's clean it up !";
			break;
	
		case 1:
			$result = "Room is filthy : let's clean it up !";
			break;

		case 2:
			$result = "Room is dirty : let's clean it up !";
			break;

		case 3:
			$result = "Nice!";
			break;

		case 4:
			$result = "AMAZING!!!";
			break;
	}

?>

<!DOCTYPE html>
<html>
    <body>
        <p>Mum : <?php echo $result?></p>
    </body>
</html>   
