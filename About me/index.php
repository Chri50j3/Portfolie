<?php
// Connecting, selecting database
$link = mysqli_connect('bik.dk.mysql','bik_dkportfolio','123456')
    or die('Could not connect: ' . mysql_error());
mysqli_select_db($link, 'bik_dkportfolio') or die('Could not select database');

// Performing SQL query
$query = 'SELECT * FROM Spiludvikling';
$result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error());

echo '\t
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		  <title>About Me</title>
</head>
<body style="background-color:rgb(14, 49, 68);">

<nav class="navbar navbar-light bg-light fixed-top">
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
\n';

echo  "\t<div class='row'>\n";
echo "\t <div class='col-md-6 offset-md-3'>
    <div class='card rounded-circle shadow-lg w-auto' style='width: 38rem;'>
      <img src='SHChristopherKvadrat.png' class='rounded-circle shadow-lg' alt='...'>
      <div class='card-body'>
        <p class='card-text'></p>
      </div>
    </div>
    <br>

    <div class='card shadow-lg w-auto' style='width: 38rem;'>
      <img src='LinkedIn Skill.png' class='card-img-top' alt='...'>
      <div class='card-body'>
        <p class='card-text'></p>
      </div>
    </div>
    <br>

    <div class='card shadow-lg w-auto' style='width: 38rem;'>
      <div class='card-body'>
      <p class='h4'>This is me</p>
        <p class='display-7'>
          I am a young man with great passion for everything digital and creative. 
          I am self-taught in 3D-modelling, and have learned Photoshop, Premiere Pro, Java, and SQLite through my education on media-school and the higher technical exam.
          My hobbies include digital art, short animations and CGI, alongside formula one, and gaming.
        </p>
      </div>
    </div>
    <br>

    <div class='card shadow-lg w-auto' style='width: 38rem;'>
      <div class='card-body'>
      <p class='h4'>Experience</p>
        <p class='display-7'>
          2022 - present | Marketing Associate at Kraftvaerk <br>
          2021 - present | Mentor in maths at MentorDanmark
        </p>
      </div>
    </div>
    <br>

    <div class='card shadow-lg w-auto' style='width: 38rem;'>
      <div class='card-body'>
      <p class='h4'>Education</p>
        <p class='display-7'>
          HTX in Communication/IT & Programming | H.C. Ørsted in Lyngby<br>
          Project Management | Ryslinge Efterskole <br>
          Media & International Team | Ryslinge Efterskole
        </p>
      </div>
    </div>
  </div>
  \n";



echo "\t </div>


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
