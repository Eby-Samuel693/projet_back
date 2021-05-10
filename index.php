<?php
// database ...

require_once "Classes/DB.php";

// my items ...

require_once "Entity/Article.php";
require_once "Entity/Roles.php";
require_once "Entity/User.php";


// my Manager ...

require_once "Manager/ArticleM.php";
require_once "Manager/RolesM.php";
require_once "Manager/UserM.php";

// Entity \user -> connect to database user ...

use Entity\User;
use projet_black\Manager\UserM;



// echo of users ...

$user1 = new User(3,'Naruto', 'coucou','ADMIN');
print_r($user1);
echo '<pre>'.'<br>';

$user2 = new user(4,'eby','moi','MODO');
print_r($user2);
echo '<pre>';
