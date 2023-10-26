<?php
interface interfaceProfesseurs{
    function evaluerEtudiant($date);
}
class Professeurs extends Etudiants implements interfaceProfesseurs{
    private $salaire;
    private $specialite;
    private $voiture;
    function __construct($prenom,$nom,$date_naissance,$matricule,$salaire,$specialite,$voiture){
        parent:: __construct($prenom,$nom,$date_naissance,$matricule);
        $this->setSpecialite($specialite);
        $this->setVoiture($voiture);
        $this->setSalaire($salaire);
    }
    function getSalaire() {return $this->salaire;}
    function getSpecialite() {return $this->specialite;}
    function getVoiture() {return $this->voiture;}
    function setSalaire($salaire){
        if (is_int($salaire)){
            $this->salaire=$salaire;
            return $this->salaire;
            } else{
                throw new Exception ("Le salaire ne peut contenir que des chiffres");
                }}
                function setSpecialite($specialite) {
                    if(preg_match("/[A-Za-z -]{5,200}/",$specialite)){
                    $this->specialite=$specialite;
                    return $this->specialite;
                    }else{
                        echo "la specialite n'est pas valide";
                    }
                    }
                    function setVoiture($result) {
                        $voiture=strtolower($result);
                        if($voiture==="oui"){
                            $this->voiture="j'ai une voiture";
                            return $this->voiture;
                            }elseif($voiture==="non") {
                                $this->voiture="je n'ai pas de voiture";
                                return $this->voiture;
                            }else{
                                echo "le choix n'est pas valide (oui ou non)";
                                }
                                }
            function presenter(){
                echo "Salut je suis professeur , je mappelle $this->prenom $this->nom je suis née le $this->date_naissance spécialisé dans $this->specialite <br>
                 J'ai le matricule $this->matricule , $this->voiture , j'ai comme salaire: $this->salaire  FCFA <br>";

            }                 
       function obligatoire(){
    }
    function evaluerEtudiant($date_evaluation){
        $this->setDate_evaluation($date_evaluation);
        echo "Je dois faire passer une evaluation aux etudians le $this->date_evaluation <br>";
    }
}