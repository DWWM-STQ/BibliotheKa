<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['roles']);
header('Location: ./home.php');
exit();