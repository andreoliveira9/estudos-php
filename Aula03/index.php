<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          require "Caneta.php";
          require "Caderno.php";
          
          
          $caderno1 = new Caderno();

          $caderno1->cor = "Azul";
          $caderno1->comprimento = 30;
          $caderno1->largura = 20;
          $caderno1->marca = "Cobra Dagua";
          $caderno1->numeroFolhas = 300;
          $caderno1->abrir();

          var_dump($caderno1);

        ?>
    </body>
</html>