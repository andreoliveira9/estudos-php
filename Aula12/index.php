<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Projeto Herança 2</h1>
        <?php
            require_once "Mamifero.php";
            require_once "Ave.php";
            require_once "Peixe.php";
            require_once "Reptil.php";
            require_once "Tartaruga.php";

            $m = new Mamifero();
            $r = new Reptil();
            $p = new Peixe();
            $a = new Ave();
            $t = new Tartaruga();

            $m->setPeso(85.3);
            $m->setIdade(2);
            $m->setMembros(4);
            $m->locomover();
            $m->alimentar();
            $m->emitirSom();

            $t->locomover();
        ?>
    </body>
</html>