<html>
<head><title>PHP Test</title></head>
	<body>
		
	<?php

		class Movie {
			public $title;
			private $rating; //no access outside the movie class

			function __construct($title, $rating){
				$this->title = $title;
				$this->setRating($rating); // make sure we check here too
			}

			//get rating with a function inside the class
			function getRating(){
				return $this->rating;
			}
			
			// set rating function
			function setRating($rating){
				if($rating == "PG" || $rating == "12" || $rating == "15" || $rating == "18"){ // check if rating is one of these
					$this->rating = $rating; // if yes, set to what was passed
				}else{$this->rating = "NR";} //if not, set it as NR
			}


		}

		$batman5 = new Movie("Batman5", "18");
		$batman5->setRating("18"); // pass something to setRating
		echo $batman5->getRating();


		?>





















</body>
</html>
