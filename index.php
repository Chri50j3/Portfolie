<?php
// Connecting, selecting database
$link = mysqli_connect('bik.dk.mysql','bik_dkportfolio','123456')
    or die('Could not connect: ' . mysql_error());
mysqli_select_db($link, 'bik_dkportfolio') or die('Could not select database');

// Performing SQL query
$query = 'SELECT * FROM products';
$result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error());

echo '\t
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		  <title>Christopher Pontoppidan Bik</title>
</head>
<body style="background-color:rgb(14, 49, 68);">

<!-- As a link -->
<nav class="navbar navbar-light bg-light fixed-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Christopher Pontoppidan Bik</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Christopher Pontoppidan Bik</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.linkedin.com/in/christopher-pontoppidan-bik-518962185/">LinkedIn</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="https://bik.dk/3D/">3D Modeling</a></li>
              <li><a class="dropdown-item" href="https://bik.dk/Animations/">Animations & CGI</a></li>
              <li><a class="dropdown-item" href="https://bik.dk/Marketing/">Marketing</a></li>
              <li><a class="dropdown-item" href="https://bik.dk/About/">About Me</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="container"> 

<br>
<br>

';


// Printing results in HTML
echo  "\t<table>\n";
echo  "\t<div class='row justify-content-md-center'>\n";
while ($line = mysqli_fetch_row($result))
{
	echo "\t <div class='col'>
    <a style='text-decoration:none;' href=$line[1]><div class='card shadow w-auto' style='width: 18rem;'>
      <img src=$line[3] class='card-img-top' alt='...'>
        <div class='card-body'>
          <p class='card-title link-dark h5'>$line[1]</p>
        </div>
		</div></a>
    <br>
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


// Free resultset
mysqli_free_result($result);

// Closing connection
mysqli_close($link);
?> 
