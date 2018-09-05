<?php 
    class Avis{


		public $question1;
		public $question2;
		public $coordonnee;
		public $dispo;


        public function __construct($question1, $question2, $coordonnee, $dispo){

            $this -> question1 = $question1;
            $this -> question2 = $question2;
            $this -> coordonnee = $coordonnee;
            $this -> dispo = $dispo;

		}

		public function addAvis(Avis $avis){
            include_once('connect.php');
            $req = $bdd->query('INSERT INTO Avis (avis_question1, avis_question2, avis_coordonnee, avis_dispo) VALUES ("'. 
                $avis -> question1 .'", "'. $avis -> question2 .'", "'. $avis -> coordonnee .'", "'. $avis -> dispo .'")');
            return $req;
        }

		public function getAvis(){

		}


	}

?>