<?php
include_once 'user.php';
$temp = new LoginFile($_POST['login'],$_POST['password'],$_POST['email'],$_POST['name']);
$temp->create();
echo("hello from register php");