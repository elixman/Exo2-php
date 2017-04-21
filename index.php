<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
  </head>
  <body>
    <p>##Exercice 1</p>
    <p>
      <?php
      $age = 30;
        if ($age < 18) {
          echo "You're a minor.";
        }
        else {
          echo "You're a big boy!";
        }
      ?>
    </p>

    <p>##Exercice 2</p>
    <p>
      <?php
      $age = 17;
      $gender = "woman";
        if ($age <18 AND $gender == "male") {
          echo "You're a man and you're a minor.";
        }
        elseif ($age <18 AND $gendre != "male") {
          echo "You're a woman and you're a minor";
        }
        elseif ($age >= 18 AND $gendre == "male") {
          echo "You're a man and you're a big boy.";
        }
        elseif ($age >= 18 AND $gendre != "male") {
          echo "You're a man and you're a big boy.";
        }
      ?>
    </p>

    <p>##Exercice 3</p>
    <p>
      <?php
      $gender = "man";
      if ($gender != "male") {
        echo "She's a developer";
      }
      else {
        echo "He's a developer";
      }
      ?>
    </p>

    <p>##Exercice 4</p>
    <p>
      <?php
      $age = 16;
      if ($age >= 18) {
        echo "You're a big boy!";
      }
      else {
        echo "You're a minor.";
      }
      ?>
    </p>

    <p>##Exercice 5</p>
    <p>
      <?php
      $boolean = false;
      if ($boolean == true) {
        echo "This is correct!";
      }
      else {
        echo "It's incorrect";
      }
      ?>
    </p>

    <p>##Exercice 6</p>
    <p>
      <?php
      $var = 10;
      if ($var == (5 + 4)) {
        echo "It's OK";
      }
      else {
        echo "It's a no no!!!";
      }
      ?>
    </p>
  </body>
</html>
