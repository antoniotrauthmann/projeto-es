<?php 
include dirname(__DIR__, 2) . '/config/conexao.php';


?>

<?php
$sql = "SELECT * FROM teste";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br>" . "ID: " . $row["id"]. " - Nome: " . $row["name"] ."<br>";
    }
} else {
    echo "0 resultados";
}

$mysqli->close();
?>
