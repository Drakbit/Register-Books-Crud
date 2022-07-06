<?php require __DIR__ . '/../inicio-html.php'; ?>
<br>
<div class="container-sm">
<form action="/entrar-conta" method="POST">
  <h1 class="h3 mb-3 fw-normal"><?= $titulo; ?></h1>
  <br>
  <div class="form-floating">
    <input type="email" class="form-control" name="email" id="email" placeholder="nome@exemplo.com">
    <label class="form-label" for="email">Email</label>
    <div id="emailHelp" class="form-text">Nós nunca iremos compartilhar seu email com terceiros.</div>
  </div>
  <br>
  <div class="form-floating">
    <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
    <label class="form-label" for="senha">Senha</label>
  </div>
  <br>
  <button class="btn btn-primary" type="submit">Entrar</button>
</form>
</div>

<?php include __DIR__ . '/../fim-html.php'; ?>
