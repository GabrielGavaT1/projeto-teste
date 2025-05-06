<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Painel - Sistema</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">
  <!-- Sidebar -->
  <nav class="bg-dark text-white p-3" style="width: 220px; height: 100vh;">
    <h5 class="text-white">Menu</h5>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link text-white" href="/painel">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Usuários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Relatórios</a>
      </li>
      <li class="nav-item mt-3">
        <a class="btn btn-sm btn-outline-light w-100" href="/sair">Sair</a>
      </li>
    </ul>
  </nav>

  <!-- Conteúdo principal -->
  <div class="p-4" style="flex: 1;">
    <h2>Bem-vindo, <?= session()->get('nome'); ?>!</h2>
    <p>Você está logado no painel administrativo.</p>
  </div>
</div>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
