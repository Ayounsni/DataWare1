<?php
include "connexion.php";
session_start();
$membre= $_SESSION['id'];
$id=$_GET['id'];
$requry=mysqli_query($conn, "UPDATE users SET id_equip = NULL WHERE id_equip=$id");
$req=mysqli_query($conn, "DELETE FROM equipes WHERE id_equipe=$id AND scrum_master_id=$membre");
header("Location: DashboardScrum.php");





?>