<?php
// Connecting, selecting database
$link = mysqli_connect('bik.dk.mysql','bik_dkportfolio','123456')
    or die('Could not connect: ' . mysql_error());
mysqli_select_db($link, 'bik_dkportfolio') or die('Could not select database');

// Performing SQL query
$query = 'SELECT * FROM products';
$result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error());

echo "\t
<html lang='en'>
<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
          integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

		  <title> Portfolio Christopher Bik</title>
      <meta name='description' content='The portfolio of Christopher Pontoppidan Bik, containing everything from animations to videogames'>
</head>
<body style='background-color:rgb(14, 49, 68);'>

<!-- As a link -->
<nav class='navbar navbar-light bg-light'>
    <div class='container-fluid'>
        <a class='navbar-brand' href=''>Christopher's Portfolio</a>
    </div>
</nav>
<div class='container'> 

<br>

\n";


// Printing results in HTML
echo  "\t<table>\n";
echo  "\t<div class='row'>\n";
while ($line = mysqli_fetch_row($result))
{
	echo "\t <div class='col'>
		<div class='card' style='width: 18rem;'>
			<img src=$line[3] class='card-img-top' alt='...'>
			<div class='card-body'>
				<h5 class='card-title'>$line[1]</h5>
				<p class='card-text'>$line[2]</p>
				<a href=$line[1] class='btn btn-primary'>Show more</a>
			</div>
		</div>
	</div> 
  <br>
  \n";

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

echo "

<br>

<div id='carouselExampleDark' class='carousel carousel-dark slide' data-bs-ride='carousel'>
<div class='carousel-inner'>
  <div class='carousel-item active'>
    <img src='https://raw.githubusercontent.com/Chri50j3/Portfolie/main/Slide1.png' class='d-block w-100' alt='...'>
  </div>
  <div class='carousel-item'>
    <img src='https://raw.githubusercontent.com/Chri50j3/Portfolie/main/Slide2.png' class='d-block w-100' alt='...'>
  </div>
  <div class='carousel-item'>
    <img src='https://raw.githubusercontent.com/Chri50j3/Portfolie/main/Slide3.png' class='d-block w-100' alt='...'>
  </div>
</div>
<button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleDark' data-bs-slide='prev'>
  <span class='carousel-control-prev-icon' aria-hidden='true'></span>
  <span class='visually-hidden'>Previous</span>
</button>
<button class='carousel-control-next' type='button' data-bs-target='#carouselExampleDark' data-bs-slide='next'>
  <span class='carousel-control-next-icon' aria-hidden='true'></span>
  <span class='visually-hidden'>Next</span>
</button>
</div>";

// Free resultset
mysqli_free_result($result);

// Closing connection
mysqli_close($link);
?> 
