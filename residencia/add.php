<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Nova Residência</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Rua</label>
      <input type="text" class="form-control" name="residencia['address']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Bairro</label>
      <input type="text" class="form-control" name="residencia['hood']">
    </div>
    
    <div class="form-group col-md-3">
      <label for="campo3">CEP</label>
      <input type="text" class="form-control" name="residencia['zip_code']">
    </div>
  
    <div class="form-group col-md-3">
      <label for="campo4">Município</label>
      <input type="text" class="form-control" name="residencia['city']">
    </div>

    <hr />
<br><br>
<br>
    <div class="row">
    <div class="form-group col-md-2">
      <label for="campo5">Inscrição Estadual</label>
      <input type="text" class="form-control" name="residencia['ie']">
    </div>

        <div class="form-group col-md-1">
      <label for="campo6">UF</label>
      <input type="text" class="form-control" name="residencia['state']">
    </div>
    </div>
    
  </div>

  <hr />
    <div class="form-group col-md-3">
      <label for="campo7">Data Início</label>
      <input type="text" class="form-control" name="residencia['begindate']">
    </div>
  </div>

    <div class="form-group col-md-3">
      <label for="campo8">Data Fim</label>
      <input type="text" class="form-control" name="residencia['enddate']">
    </div>
  <hr />
<br><br>
<br>

    <div class="form-group col-md-3">
      <label for="campo9">Cliente</label>
      <input type="text" class="form-control" name="residencia['idcliente']">

    </div>

    <div class="form-group col-md-3">
      <label for="campo10">Responsável</label>
      <input type="text" class="form-control" name="residencia['idresp']">
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