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

</dl>

<dl class="dl-horizontal">
	<dt>Email :</dt>
	<dd><?php echo $cliente['email']; ?></dd>

	<dt>Celular:</dt>
	<dd><?php echo $cliente['mobile']; ?></dd>

</dl>

<dl class="dl-horizontal">
	<dt>Nome Usuário:</dt>
	<dd><?php echo $cliente['username']; ?></dd>

	<dt>Senha :</dt>
	<dd><?php echo $cliente['password']; ?></dd>

</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $cliente['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>