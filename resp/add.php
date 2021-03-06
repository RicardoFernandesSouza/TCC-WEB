<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>

<h2>Novo Responsável</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome / Razão Social</label>
      <input type="text" class="form-control" name="resp['name']" required>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CNPJ / CPF</label>
      <input type="text" class="form-control" name="resp['cpf_cnpj']" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required>
    </div>
  </tr>
    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" name="resp['mobile']" maxlength="13" OnKeyPress="formatar('## #####-###', this)" required>
    </div>
    
  
    <div class="form-group col-md-7">
      <label for="campo3">E-mail</label>
      <input type="text" class="form-control" name="resp['email']" required>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Nome Usuário</label>
      <input type="text" class="form-control" name="resp['username']" required>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Senha</label>
      <input type="password" class="form-control" name="resp['password']" required>
    </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>