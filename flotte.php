<?php
class Vehicule {
    private string $marque;
    private string $constructeur;
    private int $vitesse = 0;

    public function __construct(string $marque, string $constructeur) {
        $this->marque = $marque;
        $this->constructeur = $constructeur;
    }

    public function __destruct() {
        echo "Destruction du véhicule {$this->marque} !<br>";
    }

    public function getMarque(): string {
        return $this->marque;
    }

    public function getConstructeur(): string {
        return $this->constructeur;
    }

    public function setMarque(string $newmarque): void {
        $this->marque = $newmarque;
    }

    public function setConstructeur(string $newconstructeur): void {
        $this->constructeur = $newconstructeur;
    }

    public function demarrer(): void {
        echo 'Le véhicule démarre !<br>';
    }

    public function accelerer(int $valeurAccelere): void {
        $this->vitesse += $valeurAccelere;
        echo "nouvelle Vitesse après acceleration : {$this->vitesse} <br>";
          if ($this->vitesse > 200) {
            echo 'nouvelle vitesse !<br>';
        }
    }

    public function freiner(int $valeurFreine): void {
        $this->vitesse -= $valeurFreine;
        if ($this->vitesse < 0) {
            $this->vitesse = 0;
        }
        echo "nouvelle Vitesse après freinage : {$this->vitesse} <br>";
    }

    public function getVitesse(): int {
        return $this->vitesse;
    }
}

class Voiture extends Vehicule {
    private int $nbportes;

    public function __construct(string $marque, string $constructeur, int $nbportes) {
        parent::__construct($marque, $constructeur);
        $this->nbportes = $nbportes;
    }

    public function klaxonner(): void {
        echo 'La voiture klaxonne !<br>';
    }

    public function demarrer(): void {
        echo 'La voiture démarre avec le moteur thermique !<br>';
    }
}

class VoitureElectrique extends Voiture {
    private int $autonomie;

    public function __construct(string $marque, string $constructeur, int $nbportes, int $autonomie) {
        parent::__construct($marque, $constructeur, $nbportes);
        $this->autonomie = $autonomie;
    }

    public function recharger(): void {
        echo 'Recharge en cours !<br>';
    }

    public function demarrer(): void {
        echo 'Le véhicule électrique démarre silencieusement !<br>';
    }
}
