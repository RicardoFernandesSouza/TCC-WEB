<?php 
	require_once('functions.php'); 
	viewresp($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>
 
<h2>Responsável <?php echo $resp['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome / Razão Social:</dt>
	<dd><?php echo $resp['name']; ?></dd>


<?php
//FORMATAR VISUALIZAÇÃO DO CPF
/*
	$nbr_cpf = $resp['cpf_cnpj'];

	$parte_um     = substr($nbr_cpf, 0, 3);
	$parte_dois   = substr($nbr_cpf, 3, 3);
	$parte_tres   = substr($nbr_cpf, 6, 3);
	$parte_quatro = substr($nbr_cpf, 9, 2);

	$monta_cpf = "$parte_um.$parte_dois.$parte_tres-$parte_quatro";

*/?>
	<dt>CPF / CNPJ:</dt>
	<dd><?php echo $resp['cpf_cnpj']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Email :</dt>
	<dd><?php echo $resp['email']; ?></dd>

	<dt>Celular:</dt>
	<dd><?php echo $resp['mobile']; ?></dd>

</dl>

<dl class="dl-horizontal">
	<dt>Nome Usuário:</dt>
	<dd><?php echo $resp['username']; ?></dd>

	<dt>Senha :</dt>
	<dd><?php echo $resp['password']; ?></dd>

</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $resp['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>