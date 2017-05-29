<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cliente <?php echo $cliente['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome / Razão Social:</dt>
	<dd><?php echo $cliente['name']; ?></dd>

	<dt>CPF / CNPJ:</dt>
	<dd><?php echo $cliente['cpf_cnpj']; ?></dd>

	<dt>Data de Nascimento:</dt>
	<dd><?php echo $cliente['birthdate']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Endereço:</dt>
	<dd><?php echo $cliente['address']; ?></dd>

	<dt>Bairro:</dt>
	<dd><?php echo $cliente['hood']; ?></dd>

	<dt>CEP:</dt>
	<dd><?php echo $cliente['zip_code']; ?></dd>

	<dt>Data de Cadastro:</dt>
	<dd><?php echo $cliente['created']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Cidade:</dt>
	<dd><?php echo $cliente['city']; ?></dd>

	<dt>Telefone:</dt>
	<dd><?php echo $cliente['phone']; ?></dd>

	<dt>Celular:</dt>
	<dd><?php echo $cliente['mobile']; ?></dd>

	<dt>UF:</dt>
	<dd><?php echo $cliente['state']; ?></dd>

	<dt>Inscrição Estadual:</dt>
	<dd><?php echo $cliente['ie']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $cliente['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>