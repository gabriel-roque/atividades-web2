<?

$form_data = (object)[
    'nome' => $_POST['nome'],
    'email' => $_POST['email'],
    'telefone' => $_POST['telefone'],
    'tel_alternativo' => $_POST['tel_alternativo'],
    'estado' => $_POST['estado'],
    'numero' => $_POST['numero'],
    'quadra' => $_POST['quadra'],
    'rua' => $_POST['rua'],
];


var_dump($form_data);

?>