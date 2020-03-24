<?php
require_once("../model/admin.php");
require_once("../model/dataAccess.php");

session_start();

if (isset($_POST["submitAdminLogin"])) {
$user = $_POST["userName"];
$password = $_POST["password"];

	$userInDB = getAdminByAdminUserName($user);
	foreach ($userInDB as $user) {
		if ($user->adminPassword === $password) {
			header('Location: adminLoggedIn.php');
		}
	}
}

require_once("../view/admin_login_view.php");
?>