<?php
session_start();
if (isset($_SESSION['username']))
{
    unset($_SESSION['pusername']);
    unset($_SESSION['ppassword']);
}
header("location:patient_login.php");
?>