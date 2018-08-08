<?php

try {
  $conn = new PDO("mysql:host=localhost;dbname=administracion", 'root', '');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$sql = $conn->prepare("SELECT * FROM usuarios ORDER BY id ASC");
$sql->execute();

$user = "";
$password = "";

while($result = $sql->fetch(PDO::FETCH_ASSOC)) {
  $user = $result['user'];
  $password = $result['password'];
}

if (!isset($_POST['user']) || !isset($_POST['password'])) die('nope');

if ($user === $_POST['user'] && $password === $_POST['password']) {
?>



<?php } else {
   echo '<a href="index.php">volver</a><br>';
   die('equivocado');
}
?>
