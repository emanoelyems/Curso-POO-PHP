<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - POO</title>
</head>
<body>
    <pre>
    <?php
        // require_once 'Caneta.php';
        // $c1 = new Caneta;
        // $c1->cor = "Azul";
        // $c1->ponta = 0.5;
        // $c1->modelo = "BIC Cristal";
        // $c1->destampar();
        // print_r($c1);

        // echo"<br/>";

        // $c2 = new Caneta;
        // $c2->cor = "Verde";
        // $c2->carga = 50;
        // $c2->tampar();
        // print_r($c2);


    // Exercício 1 :
        // require_once 'Mouse.php';
        // $c1 = new Mouse;
        // $c1->cor = "vermelho";
        // $c1->ligado();
        // print_r($c1);

        // echo"<br/>";

        // $c2 = new Mouse;
        // $c2->modelo = "logi1015";
        // $c2->cor = "Preto";
        // $c2->ligar = false;
        // $c2->clicar();


    // Exercício 2 :

        // require_once 'Aula.php';

        // $c1 = new Aula;
        // $c1->professor = "Gustavo Guanabara";
        // $c1->materia = "POO";
        // $c1->horaAula = true;
        // $c1->hora();



        //Aula 03  
        // require_once 'Caneta3.php';
        // $c1 = new Caneta;
        // $c1->cor = "Azul";
        // // $c1->ponta = 0.5;
        // $c1->modelo = "BIC Cristal";
        // $c1->destampar();
        // print_r($c1);


        //Aula 04

        // require_once 'Caneta4.php';

        // $c1 = new Caneta ("BIC","Azul",0.5);
        // $c2 = new Caneta ("NIC","Vermelha",1.0);

        // // $c1->setModelo("BIC"); // $c1->modelo = "NIC";
        // // $c1->setPonta(0.5);
        // // print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";

        // print_r($c1);
        // print_r($c2);


        // Aula 06 B

        require_once 'ControleRemoto.php';
        $c = new ControleRemoto();
        $c->desligar();
        $c->abrirMenu();
        $c->maisVolume();


    ?>
        </pre>
</body>
</html>