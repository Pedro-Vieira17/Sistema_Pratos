<?php
require_once "../infra/conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"] ?? null;
    $nome = trim($_POST["nome"] ?? "");
    $descricao = trim($_POST["descricao"] ?? "");
    $preco = $_POST["preco"] ?? 0;
    $categoria = trim($_POST["categoria"] ?? "");
    $id_usuario = $_POST["id_usuario"] ?? null;

    if ($id && !empty($nome) && !empty($descricao) && $preco > 0 && !empty($categoria) && !empty($id_usuario)) {
        $stmt = $conexao->prepare("UPDATE prato SET nome = ?, descricao = ?, preco = ?, categoria = ?, id_usuario = ? WHERE id = ?");
        $stmt->bind_param("ssdsii", $nome, $descricao, $preco, $categoria, $id_usuario, $id);
        $stmt->execute();
        $stmt->close();
    }
}

header("Location: ../index.php");
exit;