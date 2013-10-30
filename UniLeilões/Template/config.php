<?php
ob_start();

//$diretorio = '/~lpd';
//== Ativar erros e warnings ===
//ini_set("display_errors", 1); 
//error_reporting(E_ALL);
//==============================

define("DIRETORIO", "/Unileiloes"); // Variável usada na costrução dos links caso o site esteja fora da raiz no servidor
// Quando estiver na raiz manter definido da seguinte forma: 
// define("DIRETORIO", "");


/* Definição de variáveis de estrutura de diretório e links por todo o sistema */

$URL_DEFAULT = 'http://' . $_SERVER['HTTP_HOST'] . DIRECTORY_SEPARATOR . DIRETORIO . DIRECTORY_SEPARATOR;
$SERVER = $_SERVER['DOCUMENT_ROOT']; //.
$SERVER .= DIRETORIO . DIRECTORY_SEPARATOR;
$SERVER .= substr($_SERVER['DOCUMENT_ROOT'], -1, 1) == '/' ? '' : '/';
$MODEL = $SERVER . 'model/';

$VIEW = $SERVER . 'view/';
$URL_VIEW = 'http://' . $_SERVER['HTTP_HOST'] . DIRECTORY_SEPARATOR . DIRETORIO . DIRECTORY_SEPARATOR . '/view' . DIRECTORY_SEPARATOR;
$CONTROLLER = $SERVER . 'controller/';
$URL_CONTROLLER = 'http://' . $_SERVER['HTTP_HOST'] . DIRECTORY_SEPARATOR . DIRETORIO . DIRECTORY_SEPARATOR . '/controller' . DIRECTORY_SEPARATOR;
$URL_TEMPLATE = 'http://' . $_SERVER['HTTP_HOST'] . DIRETORIO . '/template/';
$FILE = $SERVER . 'file/';
$URL_FILE = 'http://' . $_SERVER['HTTP_HOST'] . DIRETORIO . '/file/';

$TEMPLATE = $SERVER . 'template/';

$URL_RAIZ = $_SERVER['HTTP_HOST'];

/* -- */
?>