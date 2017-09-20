<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Residência</h2>

<form action="edit.php?id=<?php echo $residencia['id']; ?>" method="post">
  <hr />

  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Endereço</label>
      <input type="text" class="form-control" name="residencia['address']" value="<?php echo $residencia['address']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Bairro</label>
      <input type="text" class="form-control" name="residencia['hood']" value="<?php echo $residencia['hood']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">CEP</label>
      <input type="text" class="form-control" name="residencia['zip_code']" value="<?php echo $residencia['zip_code']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="residencia['created']" disabled value="<?php echo $residencia['created']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Município</label>
      <input type="text" class="form-control" name="residencia['city']" value="<?php echo $residencia['city']; ?>">
    </div>

    <div class="form-group col-md-1">
      <label for="campo3">UF</label>
      <input type="text" class="form-control" name="residencia['state']" value="<?php echo $residencia['state']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Inscrição Estadual</label>
      <input type="text" class="form-control" name="residencia['ie']" value="<?php echo $residencia['ie']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">UF</label>
      <input type="text" class="form-control">
    </div>


    <div class="form-group col-md-2">
      <label for="campo3">Data Início</label>
      <input type="text" class="form-control" name="residencia['begindate']" value="<?php echo $residencia['begindate']; ?>">
    </div>
  </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data Fim</label>
      <input type="text" class="form-control" name="residencia['enddate']" value="<?php echo $residencia['enddate']; ?>">
    </div>

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
<<<<<<< HEAD

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
=======
  </div>
>>>>>>> origin/master
<BR><BR>

   <div class="form-group col-md-12">
      <a href="editEtapaCliente.php?id=<?php echo $residencia['id']; ?>" class="btn btn-info"> Etapas  Cliente <i class="fa fa-pencil"></i></a>
      <a href="editEtapaResp.php?id=<?php echo $residencia['id']; ?>" class="btn btn-info"> Etapas  Responsável <i class="fa fa-pencil"></i></a>
    </div>
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
<BR><BR>
   
</form>

<?php include(FOOTER_TEMPLATE); ?>
