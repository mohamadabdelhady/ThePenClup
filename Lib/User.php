<?php

namespace Lib;

class User extends Database
{
public function ValidateUser($request)
{
$isValid=true;
$errors=array();

return $Validation=[$isValid,$errors];
}
public function CreateNewUser($request)
{
    $validation=$this->ValidateUser($request);
    if ($validation['isValid']) {
        $firstName = $request['first_name'];
        $lastName = $request['last_name'];
        $email = $request['email'];
        $password = $request['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $obj = new Database();
        $pdo = $obj->GetConnection();
        $query = "insert into User (first_name,last_name,email,password) values ('$firstName','$lastName','$email','$hashedPassword');";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }
    else
    {

    }
}
public function GetAuthUser()
{

}
}