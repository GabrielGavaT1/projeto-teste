<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login - Sistema</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php helper('url'); ?>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">

  <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
    <h4 class="mb-4 text-center">Login do Sistema</h4>

    <!-- Exibe mensagem de erro se existir -->
    <?php if (session()->getFlashdata('erro')): ?>
      <div class="alert alert-danger" role="alert">
        <?= session()->getFlashdata('erro') ?>
      </div>
    <?php endif; ?>

    <form action="<?= base_url('autenticar') ?>" method="post">
  <div class="mb-3">
    <label for="usuario" class="form-label">Usuário</label>
    <input type="text" name="email" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="senha" class="form-label">Senha</label>
    <input type="password" name="senha" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary w-100">Entrar</button>
  </form>


  </div>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
