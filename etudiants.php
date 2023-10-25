<?php
class Etudiants{
    protected $matricule;
    protected $nom;
    protected $prenom;
    protected $date_naissance;
    protected $date_evaluation;
    public function __construct($prenom,$nom,$date_naissance,$matricule) {
        $this->setPrenom($prenom);
        $this->setNom($nom); 
        $this->setDate_naissance($date_naissance);
        $this->setMatricule($matricule);
    }
    function getNom(){
      return $this->nom;
    }
    function getPrenom(){
            return $this->prenom;
        }
       
    function getDate_naissance(){
            return $this->date_naissance; 
    }
    function getMatricule(){
            return $this->matricule;
        }
        function setPrenom($prenom){
            if (preg_match("/[A-Za-z -]{2,50}$/",$prenom)){
                $this->prenom=$prenom;
                return $this->prenom; 
            }else {
                throw new Exception("Le prenom est invalide");
            }  
        }
    function setNom($nom){
        if (preg_match("/[A-Za-z]{2,10}$/",$nom)){
            $this->nom=$nom;
            return $this->nom; 
        }else {
            throw new Exception("Le nom est invalide");
        }
       
    }
    function setDate_naissance($date_naissance){
        $date=date("d-m-Y",strtotime($date_naissance));
        if ($date == $date_naissance) {
            $this->date_naissance=$date_naissance;
            return $this->date_naissance; 
        }else {
            throw new Exception("La date doit etre sous le format 'd-m-y' ");
        }  
    }
    function setDate_evaluation($date_evaluation){
        $date1=date("d-m-Y",strtotime($date_evaluation));
        if ($date1 == $date_evaluation) {
            $this->date_evaluation=$date_evaluation;
            return $this->date_evaluation; 
        }else {
            throw new Exception("La date doit etre sous le format 'd-m-y' ");
        }  
    }
    function setMatricule($matricule){
        if(is_numeric($matricule)) {
            $this->matricule = $matricule;
            return $this->matricule;
            } else{
                throw new Exception ("le matricule ne peut contenir que des chiffres");
                }
    }
    function presenter(){
        echo "Hello la team je m'appelle $this->prenom $this->nom je detiens le matricule  $this->matricule je suis née le  $this->date_naissance merci pour votre attention! <br>";
}
    function faireEvaluation($date_evaluation){
        $this->setDate_evaluation($date_evaluation);
        echo "Je dois faire une evaluation le $this->date_evaluation <br>";
    }
    function faireCours(){
        echo "je fais cours du lundi au vendredi <br>";
    }
}