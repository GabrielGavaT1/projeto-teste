<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Teste de Conexão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container">
        <h3>Teste de Conexão com o Banco de Dados</h3>

        <?php if (isset($erro)): ?>
            <div class="alert alert-danger">
                <?= $erro ?>
            </div>
        <?php endif; ?>

        <?php if (isset($usuario)): ?>
            <div class="alert alert-success">
                <strong>Conexão bem-sucedida!</strong>
                <p>Nome do Usuário: <?= $usuario['nome'] ?></p>
                <p>Email: <?= $usuario['email'] ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
