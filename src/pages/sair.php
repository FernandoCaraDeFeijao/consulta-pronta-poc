<?php

require_once "../includes/config.php";

$_SESSION["logado"] = false;
unset($_SESSION["id_usuario"]);
unset($_SESSION["tipo_usuario"]);

header("Location: " . PAGE_URL . "/auth/login.php");
exit();