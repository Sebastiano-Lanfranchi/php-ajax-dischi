<?php

// è il php dedicato al frontend (alla view)

// per la prima milestone
require_once __DIR__ . '/database/database.php';
// qui a questo punto possiamo creare (per la prima milestone) tutto il nostro html e ciclare i nostri dischi (sempre in php)
// e stampare copertina, titolo e così via, come da screenshot.
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>ex-dischi-musicali</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/app.css">
</head>
<body>
  <div id="root">

  <header>
    <div class="container">
      <img src="img/logo.png" alt="logo" />
    </div>
  </header>

  <select class="select-genre" v-model="genreSelect" @click="filterGenre()">
    <option value="ALL">ALL</option>
    <option v-for="element in genreList">{{element}}</option>
  </select>

  <div class="cds-container container" >
    <!-- Disco ad esempio -->
    <?php foreach ($dischi as $disk => $diskDetail) { ?>
       <div class="cd">
         <img src="<?php echo $diskDetail["poster"]?>" alt="">
         <h3><?php echo $diskDetail["title"]?></h3>
         <span><?php echo $diskDetail["author"]?></span>
         <span><?php echo $diskDetail["year"]?></span>
       </div>
      <?php
    }
    ?>
  </div>
  </div>


  <script src="js/main.js" charset="utf-8"></script>
</body>
</html>
