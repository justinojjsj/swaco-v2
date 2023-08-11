<?php
session_start();

include_once '../php/conexao.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//Converter a data e hora do formato brasileiro para o formato do Banco de Dados
$data_start = str_replace('/', '-', $dados['start']);
$data_start_conv = date("Y-m-d H:i:s", strtotime($data_start));

$data_end = str_replace('/', '-', $dados['end']);
$data_end_conv = date("Y-m-d H:i:s", strtotime($data_end));

$query_event = "INSERT INTO events (title, color, start, end, url) VALUES (:title, :color, :start, :end, :url)";

$insert_event = $conn->prepare($query_event);
$insert_event->bindParam(':title', $dados['title']);
$insert_event->bindParam(':color', $dados['color']);
$insert_event->bindParam(':start', $data_start_conv);
$insert_event->bindParam(':end', $data_end_conv);
$insert_event->bindParam(':url', $dados['url']);

//alert('Início da Consulta ');

if ($insert_event->execute()) {
    //$retorna = ['sit' => true, 'msg' => '<div class="alert alert-success" role="alert">Evento cadastrado com sucesso!</div>'];
    $retorna = ['sit' => true, 'msg' => 'sucesso'];
    //$_SESSION['msg'] = '<div class="alert alert-success" role="alert">Evento cadastrado com sucesso!</div>';
    $_SESSION['msg'] = 'sucesso';
    header("Location: ../index.php");
} else {
    //$retorna = ['sit' => false, 'msg' => '<div class="alert alert-danger" role="alert">Erro: Evento não foi cadastrado com sucesso!</div>'];
    $retorna = ['sit' => false, 'msg' => 'erro'];
    header("Location: ../index.php");
}


header('Content-Type: application/json');
echo json_encode($retorna);

