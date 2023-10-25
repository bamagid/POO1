<?php 
require_once('etudiants.php');
require('professeurs.php');
$etudiantTest= new Etudiants("Abdoul Magid","Ba","05-02-2002",221);
$etudiantTest->presenter();
$etudiantTest->faireEvaluation("30-10-2023");
$etudiantTest->faireCours();
$proffesseur1= new Professeurs("Cheikh Saliou","Talla","15-12-1994",2023,5000000,"le domaine de l'informatique et de la programmation","OUI");
$proffesseur1->presenter();
$proffesseur1->evaluerEtudiant("01-12-2023");




