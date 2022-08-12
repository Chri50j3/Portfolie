<?php
// Connecting, selecting database
$link = mysqli_connect('bik.dk.mysql','bik_dkportfolio','123456')
    or die('Could not connect: ' . mysql_error());
mysqli_select_db($link, 'bik_dkportfolio') or die('Could not select database');

// Performing SQL query
$query = 'SELECT * FROM Animation';
$result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error());

echo "\t
<html lang='en'>
<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
          integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

		  <title> 3D modellering</title>
</head>
<body>

<!-- As a link -->
<nav class='navbar navbar-light bg-light'>
    <div class='container-fluid'>
        <a class='navbar-brand' href='/'>Christopher's Portfolio</a>
    </div>
</nav>
<div class='container'> \n";


// Printing results in HTML
echo  "\t<table>\n";
echo  "\t<div class='row'>\n";
while ($line = mysqli_fetch_row($result))
{
	echo "\t <div class='col'>
		<div class='card' style='width: 18rem;'>
            <video controls>
			    <source src=$line[2] type=´video/mp4´ class='card-img-top' alt='...'>
            </video>
			<div class='card-body'>
				<h5 class='card-title'>$line[0]</h5>
				<p class='card-text'>$line[1]</p>
			</div>
		</div>
	</div> \n";

}
echo  "\t</div>\n";
echo "\t </div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p'
        crossorigin='anonymous'></script>

</body>
</html> \n";


echo "</table>\n";

// Free resultset
mysqli_free_result($result);

// Closing connection
mysqli_close($link);
?> 
