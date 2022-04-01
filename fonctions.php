<?php
function dessinePendu($niveau)
{
	switch ($niveau) {
		case 1:
			echo "
|\___________
|____________\\\n";
			break;
		case 2:
			echo "
*
||
||
||
||
||
||
||
||
||
||      
||      
||      
||   
||
|\___________
|____________\\\n";
			break;
		case 3:
			echo "
*----------\
||
||
||
||
||
||
||
||
||
||      
||      
||      
||   
||
|\___________
|____________\\\n";
			break;
		case 4:
			echo "
*----------\
||       __|__
||      |     |
||      | X X |
||      |_____|
||
||
||
||
||
||
||
||
||
||
|\___________
|____________\\\n";
			break;
		case 5:
			echo "
*----------\
||       __|__
||      |     |
||      | X X |
||      |_____|
||     ____|____
||    |         |
||    |         |
||    |         |
||    |_________|
||       
||       
||        
||   
||
|\___________
|____________\\\n";
			break;
		case 6:
			echo "
*----------\
||       __|__
||      |     |
||      | X X |
||      |_____|
||     ____|____
||   /|         |
||  / |         | 
|| /  |         |  
||    |_________|
||      
||       
||        
||         
||
|\___________
|____________\\\n";
			break;
		case 7:
			echo "
*----------\
||       __|__
||      |     |
||      | X X |
||      |_____|
||     ____|____
||   /|         |\
||  / |         | \
|| /  |         |  \
||    |_________|
||
||
||
||
||
|\___________
|____________\\\n";
			break;
		case 8:
			echo "
*----------\
||       __|__
||      |     |
||      | X X |
||      |_____|
||     ____|____
||   /|         |\
||  / |         | \
|| /  |         |  \
||    |_________|
||        /
||       /  
||      /    
||   __/      
||
|\___________
|____________\\\n";
			break;
		case 9:
			echo "
*----------\
||       __|__
||      |     |
||      | X X |
||      |_____|
||     ____|____
||   /|         |\
||  / |         | \
|| /  |         |  \
||    |_________|
||        /\
||       /  \
||      /    \
||   __/      \__
||
|\___________
|____________\n";
			break;
	}
}

function sauvePendu()
{
	echo "

      __|__
     | * * |
     |     |
\    |_\_/_|    /
 \  ____|____  /
  \|         |/
   |         | 
   |         |  
   |_________|
       /\
      /  \
     /    \
  __/      \__\n";
}
// dessinePendu(1);

function cacheMot($mot)
{
	$motArray = str_split($mot);
	for ($i = 0; $i < sizeof($motArray); $i++) {
		# code...
		$motArray[$i] = "_";
	}
	return $motArray;
}

function afficheMotCache($mot, $erreur)
{
	echo implode(" ", $mot);
	echo "\nNombre d'erreur : " . $erreur . "\n";
}

function demandeLettre()
{
	do {
		$input = strtolower(readline("Rentrez une lettre : "));
	} while (is_numeric($input));

	return $input;
}
function demandeUneLettre()
{
	do {
		$input = strtolower(readline("Rentrez une seule lettre : "));
	} while (is_numeric($input) || strlen($input) > 1);

	return $input;
}

function gagne()
{
	sauvePendu();
	echo "Bravo vous avez gagné !\n";
}
function perdu($mot = "")
{
	echo "Perdu !\n";
	if ($mot != "") {
		echo "le bon mot était : " . $mot . "\n";
	}
}
