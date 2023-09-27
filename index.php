<?php

$persons = [
  [
    'name' => 'Cathy Martin',
    'src' => './assets/picture1.jpeg',
    'job' => 'Developeuse PHP',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur
    reiciendis corporis'
  ],
  [
    'name' => 'Nicolas Durand',
    'src' => './assets/picture2.jpeg',
    'job' => 'Developeuse JS',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur
    reiciendis corporis'
  ],
  [
    'name' => 'Guillaume Dupond',
    'src' => './assets/picture3.jpeg',
    'job' => 'Designer',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur
    reiciendis corporis'
  ],
]
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="cards-container">
    <?php for ($i = 0; $i < count($persons); $i++): ?>
      <div class="card">
        <img class="recto" src=<?php echo $persons[$i]['src'] ?> alt="portrait" />
        <div class="verso">
          <div class="details">
            <div class="description">
            <?php echo $persons[$i]['description'] ?>
            </div>
            <h2><?php echo $persons[$i]['name'] ?></h2>
            <h3><?php echo $persons[$i]['job'] ?></h3>
            <div class="social-icon">
              <a href="#"><i class="fa-brands fa-facebook"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-pinterest"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php endfor; ?>
      
    </div>
    <script
      src="https://kit.fontawesome.com/b0fe03b679.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
