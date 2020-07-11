<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Projeto Herança</h1>
        <?php
            //require "Pessoa.php";
           require "Aluno.php";
           require "Professor.php";
           require "Funcionario.php";

           $p1 = new Pessoa();
           $p2 = new Aluno();
           $p3 = new Professor();
           $p4 = new Funcionario();

           $p1->setNome("Pedro");
           $p2->setNome("Maria");
           $p3->setNome("Claudio");
           $p4->setNome("Fabiana");

           $p1->setSexo("M");
           $p2->setSexo("F");
           var_dump($p1);
           var_dump($p2);
           var_dump($p3);
           var_dump($p4);

        ?>
    </body>
</html>