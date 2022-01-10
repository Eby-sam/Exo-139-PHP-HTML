<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>

    <?php
    //students
        $students = ['sam', 'greg', 'sarah', 'sonia', 'tsunade'];
    ?>
    <ul>
        <?php
            $chaine = implode(", ", $students);
            echo "<div>$chaine</div>";
        ?>
    </ul>

    <!-- Incluez le fichier index2.php ici bas de manière a obtenir la suite du code HTML. -->

    <?php
        include "index2.php";
    ?>