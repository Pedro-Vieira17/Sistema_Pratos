<?php
require_once "../infra/conexao.php";

$id_usuario = $_GET["usuario_id"] ?? null;

if ($id_usuario) {
    $stmt = $conexao->prepare("SELECT prato.*, usuario.nome AS usuario_nome FROM prato INNER JOIN usuario ON prato.id_usuario = usuario.id WHERE prato.id_usuario = ?");
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $pratos = $stmt->get_result();
    $stmt->close();
} else {
    $pratos = $conexao->query("SELECT prato.*, usuario.nome AS usuario_nome FROM prato INNER JOIN usuario ON prato.id_usuario = usuario.id");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Pratos</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <h2>Pratos Cadastrados</h2>
    <a href="../index.php">Voltar</a>
    <table border="1">
        <tr>
            <th>ID</th><th>Nome</th><th>Descrição</th><th>Preço</th><th>Categoria</th><th>Cadastrado por</th>
        </tr>
        <?php while ($p = $pratos->fetch_assoc()): ?>
            <tr>
                <td><?php echo $p['id']; ?></td>
                <td><?php echo $p['nome']; ?></td>
                <td><?php echo $p['descricao']; ?></td>
                <td>R$ <?php echo number_format($p['preco'], 2, ',', '.'); ?></td>
                <td><?php echo $p['categoria']; ?></td>
                <td><?php echo $p['usuario_nome']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>