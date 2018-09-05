<?php 
    class Avis{


		public $question1;
		public $question2;
		public $coordonnee;
		public $dispo;


        public function __construct($question1, $question2, $coordonnee, $dispo){

            $this->question1 = $question1;
            $this->question2 = $question2;
            $this->coordonnee = $coordonnee;
            $this->dispo = $dispo;

		}

        /*Method for add view to database*/ 
		public function add(Avis $avis){
            /*Connect to database*/
            include_once('connect.php');

            /*Send to database the data from form*/
            $req = $bdd->query('INSERT INTO Avis (avis_question1, avis_question2, avis_coordonnee, avis_dispo) VALUES ("'. 
                $avis->question1 .'", "'. $avis->question2 .'", "'. $avis->coordonnee .'", "'. $avis->dispo .'")');

            return $req;
        }
        /*Method for get view from database*/
		public function get(){

		}


	}

?>