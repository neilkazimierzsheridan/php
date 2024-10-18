<html>
<head><title>PHP Test</title></head>
	<body>
		
		

		<?php
			class Book { // create class
				var $title;
				var $author;
				var $pages;
				var $publisher;

				function __construct($name){ //constructor
					echo "New Book Created #: $name <br>";
				}


			}
			// object i.e. instance of class
			$book1 = new Book("1");
			$book1->title = "Land of Spiders";
			$book1->author = "AR. Acnid";
			$book1->pages = 500;
			$book1->publisher = "Web Weavers";

			echo "<h1>$book1->title</h1>";

			$book2 = new Book("2");
			$book2->title = "World of Hell";
			$book2->author = "S.A. TAN";
			$book2->pages = 5000;
			$book2->publisher = "Demonic";

			echo "<h1>$book2->publisher</h1>";



		?>








	</body>

</html>