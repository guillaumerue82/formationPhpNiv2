<?php

class CompteBancaire
{
    protected $proprietaire;
    protected $type;
    protected $solde = 0; //on fige le solde initial à 0

    public function getProprietaire(): string
    {
        return $this->proprietaire;
    }

    public function setProprietaire(string $proprietaire): CompteBancaire
    {
        $this->proprietaire = $proprietaire;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): CompteBancaire
    {
        $this->type = $type;
        return $this;
    }

    public function getSolde(): float
    {
        return $this->solde;
    }
}

$cptCourant = new CompteBancaire();
$cptCourant->setType('Courant');
$cptCourant->setProprietaire('John Doe');
// $cptCourant->setSolde(1000);


// $cptCourant->crediter(199 * 1000 * 1000 * 1000);
// $cptCourant->debiter(44 * 1000 * 1000 * 1000);

echo "Propriétaire : " . $cptCourant->getProprietaire() . "\n";
echo "Type de compte : " . $cptCourant->getType() . "\n";
echo "Solde : " . $cptCourant->getSolde() . "\n";

// Compléter la classe CompteBancaire tel que :
// créer 3 propriétés $type, $proprietaire, $solde
// initialiser le solde à 0
// créer les getters / setters pour ces 3 propriétés sauf setSolde
// intéragir avec le solde via les méthodes crediter et debiter
// l'exemple devra afficher :
// Propriétaire : Elon Musk
// Type de compte : Courant
// Solde : 155000000000

// Bonus :
// N'autoriser que 3 types de comptes : Courant, PEL, Livret A
// Interdire les soldes négatifs
// Interdire de passer des montants négatifs à crediter et debiter