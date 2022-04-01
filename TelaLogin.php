<main>

  <section>
    <a href="index.php">
      <button class="btn btn-success">Voltar</button>
    </a>
  </section>

  <h2 class="mt-3"><?= TITLE ?></h2>

  <form method="post">

    <div class="form-group">
      <label>Título</label>
      <input type="text" class="form-control" name="titulo" value="<?= $Vaga->titulo ?>">
    </div>

    <div class="form-group">
      <label>Descrição</label>
      <textarea class="form-control" name="descricao" rows="5"><?= $Vaga->descricao ?></textarea>
    </div>

    <div class="form-group">
      <label>Status</label>

      <div>
        <div class="form-check form-check-inline">
          <label class="form-control">
            <input type="radio" name="ativo" value="S" checked> Ativo
          </label>
        </div>

        <div class="form-check form-check-inline">
          <label class="form-control">
            <input type="radio" name="ativo" value="N" <?= $Vaga->ativo == "N" ? "checked" : '' ?>> Inativo
          </label>
        </div>
      </div>

    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>

  </form>

</main>