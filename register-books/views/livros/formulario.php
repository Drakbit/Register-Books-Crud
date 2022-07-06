<?php $titulo_pagina = isset($titulo) ? $titulo : ''; ?>

<?php require __DIR__ . '/../inicio-html.php'; ?>

<div class="container">
  <br>
  <h1 class="display-2"><?= isset($titulo) ? $titulo : ''; ?></h1>
  
  <form class="" action="/salvar-livro" method="POST">
  <br>
    <div class="form-group">
      <label for="display-3">Titulo</label>
      <input type="text" name="titulo" id="titulo" class="form-control" value="<?= isset($livro) ? $livro : ''; ?>">
    </div>
    <div class="form-group">
      <label for="display-3">Descrição</label>
      <input type="text" name="descricao" id="descricao" class="form-control" value="<?= isset($livro) ? $livro : ''; ?>">
    </div>
    <div class="form-group">
      <label for="display-3">Autor</label>
      <input type="text" name="autor" id="autor" class="form-control" value="<?= isset($livro) ? $livro : ''; ?>">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
</div>

<?php include __DIR__ . '/../fim-html.php'; ?>
