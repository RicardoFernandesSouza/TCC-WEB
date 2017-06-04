<?php
require_once('../config.php');
require_once(DBAPI);
$residencias = null;
$residencia= null;
/**
 *  Listagem de residencias
 */
function index() {
	global $residencias;
	$residencias = find_all('residencia');
}

/**
 *  Cadastro de residencias
 */
function add() {
  if (!empty($_POST['residencia'])) {
    
    $today = 
    date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $residencia = $_POST['residencia'];
    $residencia['modified'] = $residencia['created'] = $today->format("Y-m-d H:i:s");
    
    save('residencia', $residencia);
    header('location: index.php');
  }
}


function passaID(){
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['residencia'])) {
      $residencia = $_POST['residencia'];
      $residencia['modified'] = $now->format("Y-m-d H:i:s");
      update('residencia', $id, $residencia);
      header('location: index.php');
    } else {
      global $residencia;
      $residencia = find('residencia', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de residencia
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['residencia'])) {
      $residencia = $_POST['residencia'];
      $residencia['modified'] = $now->format("Y-m-d H:i:s");
      update('residencia', $id, $residencia);
      header('location: index.php');
    } else {
      global $residencia;
      $residencia = find('residencia', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um residencia
 */
function view($id = null) {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['residencia'])) {
      $residencia = $_POST['residencia'];
      $residencia['modified'] = $now->format("Y-m-d H:i:s");
      update('residencia', $id, $residencia);
      header('location: index.php');
    } else {
      global $residencia;
      $residencia = find('residencia', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Exclusão de um residencia
 */
function delete($id = null) {
  global $residencia;
  $residencia = remove('residencias', $id);
  header('location: index.php');
}

