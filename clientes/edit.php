<?php 
  require_once('functions.php'); 
  edit();
?>

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

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $cliente['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome / Razão Social</label>
      <input type="text" class="form-control" name="cliente['name']" value="<?php echo $cliente['name']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CNPJ / CPF</label>
      <input type="text" class="form-control" name="cliente['cpf_cnpj']" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" value="<?php echo $cliente['cpf_cnpj']; ?>">
    </div>


    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" name="cliente['mobile']" maxlength="14" OnKeyPress="formatar('## #####-###', this)" value="<?php echo $cliente['mobile']; ?>">
    </div>

    <div class="form-group col-md-7">
      <label for="campo3">E-mail</label>
      <input type="text" class="form-control" name="cliente['email']" value="<?php echo $cliente['email']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Nome Usuário</label>
      <input type="text" class="form-control" name="cliente['username']" value="<?php echo $cliente['username']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo3">Senha</label>
      <input type="password" class="form-control" name="cliente['password']" value="<?php echo $cliente['password']; ?>">
    </div>

  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>