<?php 
//inicio sessão
session_start();

//carregamento rotas permitidas

$rotas_permitidas = require_once __DIR__.'/../inc/rotas.php';

//definicao da rota
$rota = $_GET['rota'] ?? 'home';

//verificar se o usuario esta logado
if(!isset($_SESSION['usuario'])){
    $rota = 'login';
}

//se o usuario esta logado e tenta entrar no login

if(isset($_SESSION['usuario']) && $rota === 'login'){
    $rota = 'home';
}

//se a rota não existe
if(!in_array($rota, $rotas_permitidas)){
    $rota = '404';
}

//preparacao
$script = null;
switch($rota){
    case '404':
        $script = '404.php';
        break; 
    case 'login':
        $script = 'login.php';
        break;
    case 'home':
        $script = 'home.php';
        break;
}

//apresentacao da pagina
require_once __DIR__ . "/../inc/header.php";
require_once __DIR__ . "/../scripts/$script";
require_once __DIR__ . "/../inc/footer.php";