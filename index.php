<?php

// è il php dedicato al frontend (alla view)
require_once __DIR__ . '/app/server.php';
// per la prima milestone

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>ex-dischi-musicali</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>

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

  <select>
    <option value="ALL">ALL</option>
    <option>Rock</option>
    <option>Pop</option>
    <option>Jazz</option>
    <option>Metal</option>
  </select>

  <div class="cds-container container" >
    <!-- Disco ad esempio -->
    <?php foreach ($filtered as $disk => $diskDetail) { ?>
       <div class="cd">
         <img src="<?php echo $diskDetail["poster"]?>" alt="">
         <h3><?php echo $diskDetail["title"]?></h3>
         <span class="author"><?php echo $diskDetail["author"]?></span>
         <span class="year"><?php echo $diskDetail["year"]?></span>
       </div>
      <?php
    }
    ?>
  </div>
  </div>
<script src="js/main.js" charset="utf-8"></script>
</body>
</html>
