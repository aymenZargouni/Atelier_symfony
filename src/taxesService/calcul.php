<?php
namespace App\taxesService ;
class calcul{
    
    public function calculMontantTva($pu,$tva){
        return $pu*$tva;
    }
    public function montantTTC($pu,$tva){
        return $pu+($tva*$pu);
    }
}