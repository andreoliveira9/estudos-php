<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          require "Caneta.php";
          require "Caderno.php";
          
            $c1 = new Caneta("BIC", "Azul", 0.5);
            $c2 = new Caneta("KKK", "Verde", 0.7);
            
            
            var_dump($c1);
            
            print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";

        ?>
    </body>
</html>