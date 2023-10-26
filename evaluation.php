<?php
class Evaluations {
    private $nomProf;
    private $nomEval;
    private $dureeEval;
    private $dateEval;
    public function __construct($nomProf, $nomEval, $duree,$dateEval) {
        $this->setNomprof($nomProf);
        $this->setNomeval($nomEval);
        $this->setDureeval($duree);
        $this->setDateeval($dateEval);
    }
    function getNomprof(){return $this->nomProf ;}
    function setNomprof($nomProf){  
    if (preg_match("/[A-Za-z ]{5,100}$/",$nomProf)){
        $this->nomProf=$nomProf;
        return $this->nomProf; 
    }else {
        throw new Exception("Le nom est invalide");
    }}
    function getNomeval(){return $this->nomEval ;}
    function setNomeval($nomEval){
        if (preg_match("/^[A-Za-z 0-9]{5,100}$/",$nomEval)){
        $this->nomEval=$nomEval;
        return $this->nomEval; 
    }else {
        throw new Exception("Le nom est invalide");
    }}
    function getDureeval(){return $this->dureeEval ;}
    function setDureeval($duree){
        if (is_numeric($duree) && ($duree > 0 && $duree <24 )) {
           return $this->dureeEval=$duree;
        }else{
            throw new Exception("La durée doit être un nombre entre 0 et 24");
        }}
    function getDateeval(){return $this->dateEval ;}
    function setDateeval($dateEval){
        $date=date("d-m-Y",strtotime($dateEval));
        if ($date == $dateEval) {
            $this->dateEval=$dateEval;
            return $this->dateEval; 
        }else {
            throw new Exception("La date doit etre sous le format 'd-m-y' ");
        }}
    function detailsEvaluation(){
        echo "L'evaluation qui porte le nom $this->nomEval aura lieu le $this->dateEval pour une durée de $this->dureeEval heures et le professeur concerné par cet evaluation est  $this->nomProf " ;
    }
        
}