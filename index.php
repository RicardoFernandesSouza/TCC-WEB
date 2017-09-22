<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h1>Dashboard</h1>
<hr />

<?php if ($db) : ?>

<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="clientes/add.php" class="btn btn-primary">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Novo Cliente</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="clientes" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Clientes</p>
				</div>
			</div>
		</a>
	</div>
</div>
<br><br><br>
<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="resp/add.php" class="btn btn-primary">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Novo Responsável</p>
				</div>
			</div>
		</a>
	</div>

		<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="residencia" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Responsável</p>
				</div>
			</div>
		</a>
	</div>
</div>
<br><br><br>
<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="residencia/add.php" class="btn btn-primary">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Nova Residência</p>
				</div>
			</div>
		</a>
	</div>

		<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="residencia" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Residência</p>
				</div>
			</div>
		</a>
	</div>
</div>


<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>


<?php include('clientes/modal.php'); ?>
<?php include('resp/modal.php'); ?>
<?php include('residencia/modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>
