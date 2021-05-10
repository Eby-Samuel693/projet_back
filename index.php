<?php
// database ...



require_once $_SERVER['DOCUMENT_ROOT']."/Classes/DB.php";

// my items ...

require_once $_SERVER['DOCUMENT_ROOT']."/Entity/Article.php";
require_once $_SERVER['DOCUMENT_ROOT']."/Entity/Roles.php";
require_once $_SERVER['DOCUMENT_ROOT']."/Entity/User.php";


// my Manager ...

require_once $_SERVER['DOCUMENT_ROOT']."/Manager/ArticleM.php";
require_once $_SERVER['DOCUMENT_ROOT']."/Manager/RolesM.php";
require_once $_SERVER['DOCUMENT_ROOT']."/Manager/UserM.php";

// Entity \user -> connect to database "projet_back->table(user)" ...

use Entity\User;
use projet_back\Manager\UserM;


// echo of users ...

$user1 = new User(3,'Naruto', 'coucou',1);
echo '<pre>';
print_r($user1);
echo '</pre>'.'<br>';

$user2 = new user(4,'eby','moi',2);
echo '<pre>';
print_r($user2);
echo '</pre>';

$userManager = new UserM();
echo '<pre>';
print_r($userManager->getAll());
echo '</pre>';

echo '<pre>';
print_r($userManager->getuser(3));
echo '</pre>';
