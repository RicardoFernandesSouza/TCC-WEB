<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>
<<<<<<< HEAD
<h2>Atualizar Residência</h2>

=======

<h2>Atualizar Residência</h2>
>>>>>>> origin/master
<?php
$connect = mysqli_connect("localhost", "root", "", "tohomecrud");
$query = "SELECT * FROM tbl_name1 where id_residencia like '".mysqli_real_escape_string($connect, $_GET["id"])."'";
$result = mysqli_query($connect, $query);
?>
<<<<<<< HEAD
<html>  
 <head>  
          <title>Editar Etapas do Responsável</title>  
=======

<html>  
 <head> 

          <title>Editar Etapas do Cliente</title>  
>>>>>>> origin/master
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="jquery.tabledit.min.js"></script>
    </head>  
    <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive">  
<<<<<<< HEAD
    <h3 align="center">Editar Etapas Responsável</h3><br />  
=======
    <h3 align="center">Editar Etapas do Cliente</h3><br />  
>>>>>>> origin/master
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th>
       <th>Etapa</th>
       <th>Descrição</th>
      </tr>
     </thead>
     <tbody>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["id"].'</td>
       <td>'.$row["name"].'</td>
       <td>'.$row["details"].'</td>
      </tr>
      ';
     }
     ?>
     </tbody>
    </table>
<<<<<<< HEAD
   </div>
   <div class="form-group col-md-12">
=======
   </div>  
  </div>  

  <div class="form-group col-md-12">
>>>>>>> origin/master
      <a href="edit.php" class="btn btn-default">Voltar</a>
      <a href="index.php" class="btn btn-default">Cancelar</a>
      <a href="editEtapaCliente.php?id=<?php echo $residencia['id']; ?>" class="btn btn-info"> Etapas  Cliente <i class="fa fa-pencil"></i></a>
    </div>
  </div>
 </body>  
<<<<<<< HEAD
</html>    
  </div>  
 </body>  
=======
>>>>>>> origin/master
</html>  
<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
<<<<<<< HEAD
      url:'edit_etapa_resp.php',
=======
      url:'edit_etapa_cliente.php',
>>>>>>> origin/master
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'name'], [2, 'details']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  
<<<<<<< HEAD
 </script>
=======
 </script>
 <?php include(FOOTER_TEMPLATE); ?>
>>>>>>> origin/master
