<?php 
session_start();

// Contador de peticiones
if (empty($_SESSION['counter'])) { $_SESSION['counter']=0; }
$_SESSION['counter']++;

echo '<h1>Ejemplo de balanceador de carga</h1>';
echo '<h3> Sistema: ' . $_SERVER['SERVER_SOFTWARE'] . '</h3><br>';
echo '<h3> IP del Servidor: ' . $_SERVER['SERVER_ADDR'] . '</h3><br>';
echo '<h3> Host: ' . $_SERVER['SERVER_NAME'] . '</h3><br>';
echo '<h3> IP del cliente: ' . $_SERVER['REMOTE_ADDR'] . '</h3><br>';
echo '<h3> No. de visitas: ' . $_SESSION['counter'] . '</h3><br>';

echo '<h4>Datos completos del servidor</h4>';
echo '<pre>' . print_r($_SERVER, true);