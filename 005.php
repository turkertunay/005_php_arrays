<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php
        $friends = array("burhan", "volkan", "asli", "cem");
        echo $friends[2], "<br>";
        $friends[2] = "yaprak";
        echo $friends[2], "<br>";
        $friends[2] = "1000";
        echo $friends[2], "<br>";
        $friends[4] = "sesu";
        echo $friends[4], "<br>";
        $friends[9] = "gaffur";
        echo $friends[9], "<br>";
        echo count($friends), "<br>";
   ?>
  <br>


  </body>
</html>
