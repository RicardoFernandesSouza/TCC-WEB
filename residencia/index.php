<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Residencias</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo residencia</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th width="30%">Rua</th>
		<th width="15%">Cliente</th>
		<th width="15%">Responsável</th>
		<th width="40%">Opções</th>
		
	</tr>
</thead>
<tbody>


<?php if ($residencias) : ?>
<?php foreach ($residencias as $residencia) : ?>
<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "tohomecrud";

  $connect = mysqli_connect($hostname, $username, $password, $databaseName);
  $query =  "SELECT name,id FROM cliente where id = ".$residencia['idcliente'];
  $query1 = "SELECT name,id FROM resp where id = ".$residencia['idresp'];
  $result1 = mysqli_query($connect,$query);
  $result2 = mysqli_query($connect,$query1);

  ?>
	<tr>
		<td><?php echo $residencia['id']; ?></td>
		<td><?php echo $residencia['address']; ?></td>
		<td><?php while($row1 = mysqli_fetch_array($result1)):;?>
  			<?php echo $row1['name'];?>
 			<?php endwhile;?></td>
		<td><?php while($row2 = mysqli_fetch_array($result2)):;?>
  			<?php echo $row2['name'];?>
 			<?php endwhile;?></td>
		<td class="actions text-right">
		<a href="add_etapa_cliente.php?id=<?php echo $residencia['id']; ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Cadastrar Etapas</a>
			<a href="view.php?id=<?php echo $residencia['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $residencia['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal-resi" data-residencia="<?php echo $residencia['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>


<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>