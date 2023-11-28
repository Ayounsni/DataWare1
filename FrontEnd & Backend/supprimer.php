<?php
include "connexion.php";

$id=$_GET['id'];
$req=mysqli_query($conn, "DELETE FROM projets WHERE id_projets=$id");
header("Location: DashboardM.php");





?>
<h1>hh</h1>
