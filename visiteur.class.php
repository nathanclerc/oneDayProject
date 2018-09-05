<?php 
    class Visiteur{


		public $nom;
		public $prenom;
		public $entreprise;
        public $poste;
        public $info;


		public function __construct($nom, $prenom, $entreprise, $poste, $info){

			$this -> nom = $nom;
			$this -> prenom = $prenom;
			$this -> nom = $nom;
			$this -> entreprise = $entreprise;
            $this -> poste = $poste;
            $this -> info = $info;

		}

		public function addVisiteur(Visiteur $visit){
            include_once('connect.php');
            $req = $bdd->query('INSERT INTO Visiteur (visiteur_nom, visiteur_prenom, visiteur_entreprise, visiteur_poste, visiteur_info) VALUES ("'. 
                $visit -> nom .'", "'. $visit -> prenom .'", "'. $visit -> entreprise .'", "'. $visit -> poste .'", "'. $visit -> info .'")');
            return $req;
        }

		public function getVisiteur(){

		}


	}

?>