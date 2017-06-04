<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>



<h2>Novo Cliente</h2>


<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome / Razão Social</label>
      <input type="text" class="form-control" name="cliente['name']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CNPJ / CPF</label>
      <input type="text" class="form-control" name="cliente['cpf_cnpj']">
    </div>


  
    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" name="cliente['mobile']">
    </div>
    
  
    <div class="form-group col-md-7">
      <label for="campo3">E-mail</label>
      <input type="text" class="form-control" name="cliente['email']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Nome Usuário</label>
      <input type="text" class="form-control" name="cliente['username']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Senha</label>
      <input type="text" class="form-control" name="cliente['password']">
    </div>
    
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>