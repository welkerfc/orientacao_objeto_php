<main>

<section>
<a href="index.php">
<button class="btn btn-success">Voltar</button>
</a>
</section>
<br/>
<h2 class="h2">Cadastrar Vaga</h2>
<form class="form group" method="POST">

  <label>Título</label>
  <input type="text" class="form-control" name="titulo" />
  <br/>
  <label>Descrição</label>
  <textarea rows="5" class="form-control" name="descricao"></textarea>
  <br/>
  <label>Status</label>
  <div class="form-check form-check-inline">
  <label>
    <input type="radio"  name="ativo" checked value="s" />Ativo

  </label>
  </div>

  <div class="form-check form-check-inline">
  <label>
    <input type="radio"  name="ativo" value="n" />Inativo

  </label>
  </div>

  <div class="form-group">
    <button tytpe="submit" class="btn btn-success">Salvar</button>
  </div>
</form>
</main>
