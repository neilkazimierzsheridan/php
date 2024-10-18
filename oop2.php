<html>
<head><title>PHP Test</title></head>
	<body>
		
		

		<?php
			class Book { // create class
				var $title;
				var $author;
				var $pages;
				var $publisher;

				function __construct($aTitle, $aAuthor, $aPages, $aPublisher){ //constructor
					$this->title = $aTitle; // this being current object
					$this->author = $aAuthor;
					$this->pages = $aPages;
					$this->publisher = $aPublisher;

				}


			}
			// object i.e. instance of class
			$book1 = new Book("World of Insects", "Lady Bird", 500, "Thousand Legs");
			
			echo "<h1>$book1->title</h1>";

			$book2 = new Book("The Fall of Man", "S.A. Tan", 666, "Underworld");
		

			echo "<h1>$book2->publisher</h1>";



		?>








	</body>

</html>