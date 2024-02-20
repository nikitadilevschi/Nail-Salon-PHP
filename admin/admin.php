<?php
require_once "../database/connect.php";
session_start();
$login = $_POST["login"];
$password = $_POST["password"];

global $db1;
$sql = $db1->prepare("SELECT id, login FROM users WHERE login=:login AND password=:password");
$sql->execute(array("login" => $login, "password" => $password));

// Debugging statement
echo "SQL query: " . $sql->queryString;

$array = $sql->fetch(PDO::FETCH_ASSOC);
if ($array["id"] > 0) {
    $_SESSION["login"] = $array["login"];
    header("Location:employees/index.php");
} else {
    header("Location:/login.php");
}
?>;