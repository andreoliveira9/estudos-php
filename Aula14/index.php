<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Projeto Herança 2</h1>
        <?php
            require_once "Video.php";
            require_once "Gafanhoto.php";
            require_once "Visualizacao.php";
            $v = array();
            $g = array();
            $vis = array();

            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");

            //var_dump($v);

            $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
            $g[1] = new Gafanhoto("Creuzita", 12, "F", "creuza");
            //var_dump($g);

            $vis[0] = new Visualizacao($g[0], $v[2]);
            $vis[1] = new Visualizacao($g[0], $v[1]);

            var_dump($vis);

          ?> 
    </body>
</html>
