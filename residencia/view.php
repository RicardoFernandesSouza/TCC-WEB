<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>
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

<?php include(HEADER_TEMPLATE); ?>

<h2>Residencia <?php echo $residencia['id']; ?></h2>
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
	<dd><?php while($row1 = mysqli_fetch_array($result1)):;?>
  			<?php echo $row1['name'];?>
 			<?php endwhile;?></dd>

	<dt>Responsável:</dt>
	<dd><?php while($row2 = mysqli_fetch_array($result2)):;?>
  			<?php echo $row2['name'];?>
 			<?php endwhile;?></dd>
</dl>
 <dt>Etapas Cliente:</dt>
<dd> <?php
      $conn =   mysqli_connect("localhost", "root", "", "tohomecrud");  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id_resi = $_GET['id'];
$sql = "SELECT id, name, details FROM tbl_name where id_residencia like '".mysqli_real_escape_string($conn, $_GET["id"])."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["name"]. " " . $row["details"]. "<br>"; 
    }
} else {
    echo "0 results";
}
$conn->close();

            
 

 ?> </dd>
<BR><BR>
<dt>Etapas Responsável:</dt>
 <dd> <?php
      $conn =   mysqli_connect("localhost", "root", "", "tohomecrud");  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id_resi = $_GET['id'];
$sql = "SELECT id, name, details FROM tbl_name1 where id_residencia like '".mysqli_real_escape_string($conn, $_GET["id"])."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["name"]. " " . $row["details"]. "<br>"; 
    }
} else {
    echo "0 results";
}
$conn->close();

            
 

 ?> </dd>
<BR><BR>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $residencia['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

