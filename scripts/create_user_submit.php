<?php 
$request = $_POST;

if( 
    empty($request['user_name']) || 
    empty($request['user_email']) || 
    empty($request['role'])||
    empty($request['user_password'])
 ){
    $_SESSION['error'] = 'Todos os Dados são de preenchimento Obrigatorio';
    header('Location: index.php?rota=create_user');
    exit;
}

if($request['user_password'] !== $request['user_password_repeat']){
    $_SESSION['error'] = 'Senhas divergentes';
    header('Location: index.php?rota=create_user');
    exit;
}elseif(mb_strlen($request['user_password'],'UTF-8') < 6 ){
    $_SESSION['error'] = 'Senha deve ter no Minimo 6 caracteres';
    header('Location: index.php?rota=create_user');
    exit;
}

$password = password_hash($request['user_password'], PASSWORD_DEFAULT);

//salvar no banco de dados
die("salvar no banco de dados");