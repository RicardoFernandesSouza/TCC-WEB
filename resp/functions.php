<?php
require_once('../config.php');
require_once(DBAPI);
$resps = null;
$resp = null;
/**
 *  Listagem de resps
 */
function index() {
	global $resps;
	$resps = find_all('resp');
}

/**
 *  Cadastro de resps
 */
function add() {
  if (!empty($_POST['resp'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $resp = $_POST['resp'];
    $resp['modified'] = $resp['created'] = $today->format("Y-m-d H:i:s");
    
    save('resp', $resp);
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de resp
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['resp'])) {
      $resp = $_POST['resp'];
      $resp['modified'] = $now->format("Y-m-d H:i:s");
      update('resp', $id, $resp);
      header('location: index.php');
    } else {
      global $resp;
      $resp = find('resp', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um resp
 */
function viewresp() {
   $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['resp'])) {
      $resp = $_POST['resp'];
      $resp['modified'] = $now->format("Y-m-d H:i:s");
      update('resp', $id, $resp);
      header('location: index.php');
    } else {
      global $resp;
      $resp = find('resp', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Exclusão de um resp
 */
function delete($id = null) {
  global $resp;
  $resp = remove('resp', $id);
  header('location: index.php');
}