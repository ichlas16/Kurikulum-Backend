<?php 
class Database{
	protected   $host = 'localhost',
				$uname = 'ichlas',
				$pass = '12345',
				$db = 'db_santri';
	
		function __construct(){
			$this->connect = new PDO("mysql:host=$this->database;dbname=santri", $this->user, $this->password);
		}
	
		function edit($id){
			$query = "SELECT * FROM santri WHERE id='$id'";
			$edit = $this->connect->prepare($query);
			$edit->execute();
			while($d = $edit->fetchAll(pdo::FETCH_ASSOC)){
				$hasil[] = $d;
			}
			return $hasil;
		}
	
		function create($nama,$umur,$asal){
			$query = "INSERT INTO santri VALUES ('$nama','$umur','$asal')";
			$create = $this->Database->prepare($query);
			$create->execute();
		}
	
		function read(){
			$query = "SELECT * FROM santri";
			$show = $this->connect->prepare($query);
			$show->execute();
			$hasil[] = $show->fetchALL(pdo::FETCH_ASSOC);
			return $hasil;
		}
	
		function update($id,$nama,$umur,$asal){
			$query = "UPDATE santri SET nama='$nama', umur='$umur', asal='$asal' WHERE id='$id'";
			$update = $this->Database->prepare($query);
			$update->execute();
		}
	
		function delete($id){
			$query = "DELETE FROM santri WHERE id='$id'";
			$delete = $this->Database->prepare($query);
			$delete->execute();
		}
	}
	
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="config.php?aksi=tambah" method="post">
	
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><input type="text" name="umur"></td>
        </tr>
        <tr>
            <td>Asal</td>
            <td><input type="text" name="asal"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Jost Do It!"></td>
        </tr>
    </table>
    </form>
<h3>Data User</h3>
<form>
<a href="create.php">Input Data</a>
<table border="1">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Umur</th>
		<th>Asal</th>
		<th>Opsi</th>
	</tr>
	<?php
	$i = 1;
	foreach($db->read() as $key){
	?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $key['nama']; ?></td>
		<td><?php echo $key['umur']; ?></td>
		<td><?php echo $key['asal']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $key['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $key['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
    ?>
    </form>
</table>
</body>
</html>
<?php
$aksi = $_POST['aksi'];
    if($aksi == "tambah"){
        $db->create($_POST['nama'],$_POST['umur'],$_POST['asal']);
    }elseif($aksi == "hapus"){ 	
        $db->delete($_GET['id']);
    }elseif($aksi == "update"){
        $db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']);
    }
?>

