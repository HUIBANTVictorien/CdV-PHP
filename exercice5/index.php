<!DOCTYPE HTML>
<html>
  <head>
    <title>Exercice 5 PHP cahier de vacances</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <p style="font-size: 25px;">
        <?php
        $monTableau = ['Marc', 'Sophie', 'Maguy', 'Jonathan', 'Jennifer'];
        foreach ($monTableau as $count) {
            strlen($count);
            if (strlen($count) % 2 == 1) {
                echo (strlen($count) . ' ' . $count . ' est impair ');
            } elseif (strlen($count) % 2 == 0) {
                echo (strlen($count) . ' ' . $count . ' est pair ');
            }
        }
        ?>
    </p>
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="projet.js"></script>
</html>
