<?php
session_start();
include '../conexao.php';

$title = filter_input(INPUT_POST, 'title');
$start = filter_input(INPUT_POST, 'start');
$end = filter_input(INPUT_POST, 'end');
$url = filter_input(INPUT_POST, 'url');

$data_start = str_replace('/', '-', $start);
$data_start_conv = date("Y-m-d H:i:s", strtotime($data_start));

$data_end = str_replace('/', '-', $end);
$data_end_conv = date("Y-m-d H:i:s", strtotime($data_end));


$result_usuarios = "SELECT * FROM dados_paciente WHERE nome='$title'";
$resultado_usuario = mysqli_query($conn, $result_usuarios);
$row_usuarios = mysqli_fetch_assoc($resultado_usuario); 
$CPF =  $row_usuarios['CPF'];

$sql = "INSERT INTO events (`title`, `color`, `start`, `end`, `url`, `modificado`) VALUES ('$title', '$CPF', '$data_start_conv', '$data_end_conv', '$url', NULL)";

if ($conn->query($sql) === TRUE) {
    $_SESSION['msg'] = 'sucesso';
    header("Location: ../index.php");	
} else {
    $_SESSION['msg'] = 'erro';
    header("Location: ../index.php");
}

$conn->close();
?>