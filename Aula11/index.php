<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Projeto Herança 2</h1>
        <?php
            require "Visitante.php";
            require "Aluno.php";
            require "Bolsista.php";
            require "Professor.php";
           //require "Professor.php";
            // $p1 = new Visitante();
            // $p1->setNome("André");
            // $p1->setIdade(32);
            // $p1->setSexo("M");

            // var_dump($p1);
            $a1 = new Aluno();
            $a1->setNome("Pedro");
            $a1->setMatr(1111);
            $a1->setIdade(16);
            $a1->setSexo("M");
            $a1->setCurso("Informática");
            $a1->pagarMensalidade();
            
            var_dump($a1);

            $b1 = new Bolsista();

            $b1->setMatr(1112);
            $b1->setNome("Jubileu");
            $b1->setBolsa(12.5);
            $b1->setCurso("Administração");
            $b1->setIdade(17);
            $b1->pagarMensalidade();

            var_dump($b1);

            $p1 = new Professor();

            $p1->setEspecialidade("Matemática");
            $p1->receberAum(500);

            var_dump($p1);
        ?>
    </body>
</html>