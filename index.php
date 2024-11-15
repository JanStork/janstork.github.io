<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jan Štork</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $arrBG = array('src/img/bg/1.jpg', 'src/img/bg/2.jpg', 'src/img/bg/3.jpg', 'src/img/bg/4.jpg', 'src/img/bg/5.jpg', 'src/img/bg/1.gif', 'src/img/bg/2.gif');
    $bg = $arrBG[array_rand($arrBG)];
    echo '<img src="' . $bg . '" class="bg">';
  ?>


<div class="menu-toggle" id="menu-toggle">
  <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M5 7H19" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> 
    <path d="M5 12L19 12" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> 
    <path d="M5 17L19 17" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
  </svg>
</div>

<nav id="menu" class="menu">
  <ul>
    <li><a href="#home">Domů</a></li>
    <li><a href="#about">O mně</a></li>
    <li><a href="#projects">Portfolio</a></li>
    <li><a href="#contact">Kontakt</a></li>
    <li><a href="#tasks">Úkoly</a></li>
  </ul>
</nav>

<script>
  const menuToggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('menu');

  menuToggle.addEventListener('click', () => {
    menu.classList.toggle('active');
  });
</script>


  
  <section class="section" id="home">
      <h1>Jan Štork</h1>
  </section>
  
    <section class="section" id="about">
      <h2>O mně</h2>
      <p>web dev</p>
      <p>mykologie</p>
      <p>biologie</p>
      <p>chemie</p>
      <p>psychologie</p>
      <p>medicína</p>
    </section>
  
    <section class="section" id="projects">
      <h2>Portfolio</h2>
      <p>Ročníkový projekt <a href="https://storkrocnikovka.jecool.net/">zde</a></p>
    </section>
  
    <section class="section" id="contact">
      <h2>Kontakt</h2>
      <p id="email" style="cursor: pointer;">email: <a>jan.stork@protonmail.com<a></p>
      <p>github: <a href="https://github.com/camilliaa">camilliaa</a></p>
      <p>instagram: <a href="https://www.instagram.com/stacizachovatklidnouhlavu/">stacizachovatklidnouhlavu</a></p>
    </section>

    <section class="section" id="tasks">
      <h2>Úkoly</h2>
      <p><a href="ukoly/kalkulacka/index.html">Kalkulačka</a></p>
      <p><a href="ukoly/slider/slider.html">Slider</a></p>
      <p><a href="ukoly/formular/index.html">Formulář</a></p>
    </section>




<script>
  const emailElement = document.getElementById('email');
  
  emailElement.addEventListener('click', () => {
    const textToCopy = emailElement.textContent;
    navigator.clipboard.writeText(textToCopy)
      .then(() => {
        emailElement.style.color = '#e0afff';
        setTimeout(() => {
          emailElement.style.color = '';
        }, 250);
      })
      .catch(err => {
        console.error('Chyba při kopírování: ', err);
      });
  });
</script>
</body>
</html>
