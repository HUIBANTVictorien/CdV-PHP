<!DOCTYPE HTML>
<html>
  <head>
    <title>Exercice 8 PHP Cahier de vacances</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <form action="index.php" method="post">
      <input type="text" name="name">
      <button type="button" name="validate">Ajouter</button>
      <p style="font-size: 25px;">
        <?php
        require_once('script.php');
        if (isset($_POST['name'])) {
           
            function addToArray($monTableau, $myString) {
                $result = $monTableau;
                array_push($result, $myString);
                return $result;
            }

            $_SESSION ['monTableau'] = addToArray($_SESSION ['monTableau'], $_POST['name']);
            foreach ($_SESSION ['monTableau'] as $value) {
                echo $value . ' ';
            }
        }
        ?>
      </p>
    </form>
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="projet.js"></script>
</html>
