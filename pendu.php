<?php
$mots = [
	"Blanc", "Podium", "Attirer", "Cablage", "Capitaine", "Nuage", "Ovni", "Humide", "Femmes",
	"Tremble", "Canal", "Menottes", "Artificiel", "Madone", "Bazooka", "Pression", "Multiplication", "Prix", "Plastique",
	"Religieuse", "Cible", "Soulevement", "Mediatrice", "Philosophe", "Bande", "Canada", "Ballon", "Volee", "Muet",
	"Parking", "Minuit", "Hiberner", "Loin", "Rabat", "Monarchie", "Spermatozoide", "Poisson", "Camarade", "Moche",
	"Vache", "Rapide", "Entrepot", "Feuille", "Campus", "Pornographie", "Bucheron", "IDE", "Orbite", "Planetes", "Salle",
	"Taxi", "Bronze", "Hydrogene", "Nouveaute", "Route", "Recipient", "Fossette", "Demander", "Terrain", "Aviateur",
	"Boussole", "Plomb", "Catapulte", "Recueillir", "Stimulateur", "Cardiaque", "Chant", "Brun", "Gribouiller", "Locomotive", "Chenil"
];

$nbError = 9;

echo "Bienvenue dans ce jeu du pendu !\n";

$motSecret = strtolower($mots[array_rand($mots)]);

// $cle = array_rand($mots);
// $motSecret = $mots[$cle];
// $motSecret = strtolower($motSecret);

$erreur = 0;

require("fonctions.php");

$motMystere = str_split($motSecret);
$motCache = cacheMot($motSecret);

do {
	afficheMotCache($motCache, $erreur);

	$lettre = demandeLettre();

	if ($lettre == $motSecret) {
		break;
	}
	// echo strlen($lettre);
	if (strlen($lettre) > 1) {
		$lettre = demandeUneLettre();
	}

	$trouve = false;
	for ($i = 0; $i < sizeof($motMystere); $i++) {
		# code...
		if ($lettre == $motMystere[$i] && $motCache[$i] != $lettre) {
			$motCache[$i] = $lettre;
			$trouve = true;
		}
	}

	if (!$trouve) {
		$erreur++;
	}

	dessinePendu($erreur);

	if ($erreur == $nbError) {
		perdu($motSecret);
		break;
	}
} while ($motCache != $motMystere);

if ($erreur < $nbError) {
	gagne();
}
