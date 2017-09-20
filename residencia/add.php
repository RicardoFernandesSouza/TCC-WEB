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
      <input type="date" class="form-control" name="residencia['begindate']">
    </div>
  </div>

    <div class="form-group col-md-3">
      <label for="campo8">Data Fim</label>
      <input type="date" class="form-control" name="residencia['enddate']">
    </div>
  <hr />
<br><br>
<br>

<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "tohomecrud";

  $connect = mysqli_connect($hostname, $username, $password, $databaseName);
  $query =  "SELECT name,id FROM cliente";
  $result1 = mysqli_query($connect,$query);
  ?>

    <div class="form-group col-md-3">
      <label for="campo9">Cliente</label>
      <html>
    <head>
      <meta charset="UFT-8">
      <meta name="viewport" content="width=device-width, initial-scale=5.0">
      </head>
      <body>
      <select name="residencia['idcliente']">
        <?php while($row1 = mysqli_fetch_array($result1)):;?>
          <option value="<?php echo $row1['id'];?>"><?php echo $row1['name'];?></option>
        <?php endwhile;?>
      </select>
      </body>
  </html>
    </div>

  <?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "tohomecrud";

  $connect1 = mysqli_connect($hostname, $username, $password, $databaseName);
  $query1 =  "SELECT name,id FROM resp";
  $result2 = mysqli_query($connect1,$query1);
  ?>

    <div class="form-group col-md-3">
      <label for="campo10">Responsável</label>
 <html>
    <head>
      <meta charset="UFT-8">
      <meta name="viewport" content="width=device-width, initial-scale=5.0">
      </head>
      <body>
      <select name="residencia['idresp']">
        <?php while($row2 = mysqli_fetch_array($result2)):;?>
          <option value="<?php echo $row2['id'];?>"><?php echo $row2['name'];?></option>
        <?php endwhile;?>
      </select>
      </body>
  </html>    </div>
        </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>



  

<?php include(FOOTER_TEMPLATE); ?>