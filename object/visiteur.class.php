<?php 
    class Visiteur{


		public $nom;
		public $prenom;
		public $entreprise;
        public $poste;
        public $info;


		public function __construct($nom, $prenom, $entreprise, $poste, $info){

			$this->nom = $nom;
			$this->prenom = $prenom;
			$this->nom = $nom;
			$this->entreprise = $entreprise;
            $this->poste = $poste;
            $this->info = $info;

		}
		/*Method for add visitor to database*/
		public function add(Visiteur $visit){
			/*Connect to database*/
			include_once('connect.php');

			/*Send to database the data from form*/
            $req = $bdd->query('INSERT INTO Visiteur (visiteur_nom, visiteur_prenom, visiteur_entreprise, visiteur_poste, visiteur_info) VALUES ("'. 
				$visit->nom .'", "'. $visit->prenom .'", "'. $visit->entreprise .'", "'. $visit->poste .'", "'. $visit->info .'")');

            return $req;
        }

		/*Method for get visitor from database*/
		public function get(){
			/*Connect to database*/
			include_once('connect.php');

			/*Query for get data from database*/
			$res = $bdd>query('SELECT * FROM Visiteur');
			/*Create an object Visiteur per row*/
			for ($i=0; $i < count($res); $i++) { 
				$i = new Visiteur();
			}

			return $res;
		}


	}

?>