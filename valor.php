<?php
$conexao = new PDO('mysql:host=localhost; dbname=protocolo', 'root', 'root');
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conexao->query("select * from notas");
header('Content-Type: application/json');
while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
echo json_encode($rs);
}
?>