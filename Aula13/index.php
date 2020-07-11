<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Projeto Herança 2</h1>
        <?php
            require_once "Mamifero.php";
            require_once "Lobo.php";
            require_once "Cachorro.php";

            $m = new Mamifero();
            $l = new Lobo();
            $c = new Cachorro();
            
            $m->setPeso(85.3);
            $m->setIdade(2);
            $m->setMembros(4);
            
           
            
            $c->reagirHora(11,45);
            $c->reagirHora(21,00);
        ?>
    </body>
</html>