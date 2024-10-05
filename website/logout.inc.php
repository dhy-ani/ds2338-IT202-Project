<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
}
if (isset($_SESSION['emailAddress'])) {
    unset($_SESSION['emailAddress']);
 }
 if (isset($_SESSION['firstName'])) {
    unset($_SESSION['firstName']);
 }
 if (isset($_SESSION['lastName'])) {
    unset($_SESSION['lastName']);
 }
 if (isset($_SESSION['pronouns'])) {
    unset($_SESSION['pronouns']);
 }
header("Location: index.php");
?>
