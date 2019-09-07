<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>


    <?
    require_once('Classes/Pessoa.php');

    $p1 = new Pessoa();
    $p1->nome = 'Gabriel';
    $p1->sobrenome = 'Roque';

    var_dump($p1);

    define(NOME, 'Javascript');
    echo(NOME);


    ?>

    
</body>
</html>