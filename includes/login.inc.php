<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); 
	$conn = mysqli_connect("localhost", "root", "", "tohomecrud");

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM useradmr WHERE uid= '$uid' AND pwd= '$pwd' ";
		$result = mysqli_query($conn, $sql);

		if(!$row = $result->fetch_assoc()){
			echo "Seu Usuário ou senha está incorreto!";
			header("Location: ../login.php");

		}
		else{
			// AQUI PASSAMOS O QUE QUEREMOS RETORNAR DA TABELA LEMBRAR DE REFRENCIAR NO INDEX, NESTE CASO O NOME $_SESSION['first'] = $row['first'];
			//$_SESSION['id'] = $row ['id'];
			//$_SESSION['first'] = $row['first'];
			header("Location: ../index.php");
		}

