<?php
ob_start();
session_start();
if (isset($_SESSION['id'])) {
    session_destroy();
    unset($_SESSION['user_id']);
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    header("Location: home_employee.php");
} else {
    header("Location: dd_login.php");
}
