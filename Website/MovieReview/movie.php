<!DOCTYPE html>
<html>
<head>
    <title><?php echo $movie; ?> - Movie Review</title>
    <link rel="stylesheet" type="text/css" href="movie.css">
</head>
<body>
    <div id="header">
        <h1><?php echo $movie; ?> - Movie Review</h1>
    </div>

    <div id="main">
        <?php
            // Read the info.txt file and display the movie's general information
            $movie = $_REQUEST["film"]; // get the movie parameter from the URL
			$info_file = $movie . "/info.txt"; // construct the path to the info.txt file
			$overview_file = $movie . "/overview.txt"; // construct the path to the overview.txt file

			// Construct the path to the info.txt file
			$infoFilePath = $movie . "/info.txt";
			// Open the file for reading
			$infoFile = fopen($infoFilePath, "r");
			// Read each line of the file and store them in variables
			$title = fgets($infoFile);
			$year = fgets($infoFile);
			$rating = fgets($infoFile);
			$numReviews = fgets($infoFile);
			// Close the file
			fclose($infoFile);
			
			// Read movie title from "info.txt" file
			$info_file = fopen("$movie/info.txt", "r");
			$movie_title = fgets($info_file);
			fclose($info_file);

			// Output movie title in HTML
			echo "<h1>$movie_title</h1>";

        ?>
    </div>
</body>
</html>
