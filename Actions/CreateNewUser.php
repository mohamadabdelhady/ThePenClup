<?php
require 'Lib/User.php';
$user=new User;
$user->CreateNewUser($_POST);
