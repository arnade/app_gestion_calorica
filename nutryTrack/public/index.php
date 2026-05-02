<?php

include_once "autoload.php";
session_start();

$auth = new GestorAuth();
$gestor=new GestorPDO();
$controller = new NutryController($gestor);
$usuarioController = new UserController($gestor);

$accion = $_GET['accion'] ?? 'index';

// --- logica de cookies : re-autenticacion automatica --- 
//si No hay sesion iniciada pero si existe la cookie "usuario_login"
if (!isset($_SESSION['usuario_id']) && isset($_COOKIE['usuario_login'])){

//1.recuperamos el emailque guardamos en la cookie. (estaba e base 64)
$emailRecuperado = base64_decode($_COOKIE['usuario_login']);

//2.buscamos al usuario en la base de datos 
$usuario = $gestor->buscarUsuarioPorEmail($emailRecuperado);

//3. si el usuario exist, restauramos la sesion automaticamente 
if ($usuario) {
    $_SESSION['usuario_id'] = $usuario->getId();
    $_SESSION['usuarioEmail'] = $usuario->getEmail();
    $_SESSION['userName'] = $usuario->getUserName();
} else { // si la cookie es falsa o el usuario ya no existe , borramos la cookie por seguridad 
    setcookie('usuario_login', '', time() - 360000, '/');
    }
}

//-------------------------------------- 

switch ($accion) {
//opciones para la gestion de los usuarios
    case 'login':
        $usuarioController->login();
        break;
    case 'alta':
        $usuarioController->alta();
        break;
    case 'logout':
        $usuarioController->logout();
        break;
//opciones para la gestión de vehículos. Técnica fall-throught
    case 'crear':
    case 'editar':
    case 'eliminar':
        if (!isset($_SESSION['usuario_id'])){
            header('Location: index.php?accion=login');
            exit;
        }
        //esta autenticado, dejamos que ejecute la accion
        if ($accion === 'crear') $controller->crear();
        if ($accion === 'editar') $controller->editar();
        if ($accion === 'eliminar') $controller->eliminar();
        break;
    default:
        $controller->index();
}
