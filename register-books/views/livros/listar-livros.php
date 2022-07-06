<?php require __DIR__ . '/../inicio-html.php'; ?>

<div class="container">
  <br>
  <h1 class="display-2"><?= isset($titulo) ? $titulo : ''; ?></h1>
  <br>
  <a href="novo-livro" class="btn btn-primary mb-2"> Novo Livro </a>
  <br>
  <br>
  <ul class="list-group">
  <div class="container mt-5">

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                   <th scope="col">Categoria</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; foreach ($livros as $livro): ?>
    
    <tr>
        <th scope="row"><?= $i++; ?></th>
        <td><?= $livro->getTitulo(); ?></td>
        <td><?= $livro->getAutor(); ?></td>
        <td><?= $livro->getDescricao(); ?></td>
        <td>


        <span>
          <a href="/alterar-livro?id=<?= $livro->getId(); ?>" class="btn btn-warning btn-sm">
            Alterar
          </a>
          </td>
                    <td>
          <a href="/excluir-livro?id=<?= $livro->getId(); ?>" class="btn btn-danger btn-sm">
            Excluir
          </a>
        </span>
        </td>
        </tr>
    <?php endforeach; ?>
      </tbody>
    </table>
  </ul>
</div>

<?php include __DIR__ . '/../fim-html.php'; ?>
