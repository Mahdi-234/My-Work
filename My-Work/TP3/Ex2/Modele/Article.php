<?php
class Article
 {
    private $Reference ;
    private $Quantite;
    private $Prix ;
    private $Libelle ;

    public function __construct($Reference,$Prix, $Libelle,$Quantite ) 
    {
    $this->Reference = $Reference   ;
   $this->Prix = $Prix;
   $this->Libelle = $Libelle;
   $this->Quantite = $Quantite;
    }

    public function getQuantite($Quantite) {
    return $this->Quantite;}

    public function getLibelle($Libelle) {
    return $this->Libelle;}

    public function getPrix($Prix) {
    return $this->Prix;}

    public function getReference($Reference) {
    return $this->Reference;}

    public function setQuantite($Quantite) {
    $this->Quantite;}

    public function setLibelle($Libelle) {
     $this->Libelle;}

     public function setPrix($Prix) {
     $this->Prix;}

     public function setReference($Reference)
      { $this->Reference;}

    
     public function __get($attr) { if (!isset($this->$attr));
        else return ($this->$attr);}
         public function __set($attr,$value) {$this->$attr = $value; }
         
    

         public function __toString() {
            $s="<tr>
            <td>{$this->Reference}</td>
            <td>{$this->libelle}</td>
            <td>{$this->Prix}</td>
            <td>{$this->Quantite}</td>
            </tr>";
            return $s; 
            }
   

 }

 $A=new article("mahdi",12,,"mahdi",10);
 echo $A ;
    

 
 ?>
