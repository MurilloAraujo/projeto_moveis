<?php

require __DIR__  . "/Classes/User.php";
require __DIR__  . "/Classes/Address.php";

use Source\Lib\User;

$user = new User(1, "Murillo", "murilloaraujog@gmail.com");
$user->setData(1, "cidade", "São Paulo");
//$user->removeData(1, "cidade");

$addres = new \Source\Lib\Address(1, "a", "s");
echo $addres->getMail();

var_dump(
    $user
);

