<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>residencia <?php echo $residencia['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Endereço:</dt>
	<dd><?php echo $residencia['address']; ?></dd>

	<dt>Bairro:</dt>
	<dd><?php echo $residencia['hood']; ?></dd>

	<dt>CEP:</dt>
	<dd><?php echo $residencia['zip_code']; ?></dd>

	<dt>Data de Cadastro:</dt>
	<dd><?php echo $residencia['created']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Cidade:</dt>
	<dd><?php echo $residencia['city']; ?></dd>

	<dt>UF:</dt>
	<dd><?php echo $residencia['state']; ?></dd>

	<dt>Inscrição Estadual:</dt>
	<dd><?php echo $residencia['ie']; ?></dd>

	<dt>Data Início::</dt>
	<dd><?php echo $residencia['begindate']; ?></dd>

	<dt>Data Fim:</dt>
	<dd><?php echo $residencia['enddate']; ?></dd>

	<dt>Cliente:</dt>
	<dd><?php echo $residencia['idcliente']; ?></dd>

	<dt>Responsável:</dt>
	<dd><?php echo $residencia['idresp']; ?></dd>
</dl>



<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $residencia['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>