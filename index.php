<?php
// database ...



require_once $_SERVER['DOCUMENT_ROOT']."/Classes/DB.php";

// my items ...

require_once $_SERVER['DOCUMENT_ROOT']."/Entity/Article.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Entity/Role.php";
require_once $_SERVER['DOCUMENT_ROOT']."/Entity/User.php";


// my Manager ...

require_once $_SERVER['DOCUMENT_ROOT']."/Manager/ArticleM.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Manager/RoleM.php";
require_once $_SERVER['DOCUMENT_ROOT']."/Manager/UserM.php";



// Entity \user -> connect to database "projet_back->table(user)" ...

use Entity\Article;
use Entity\Role;
use Entity\User;
use projet_back\Manager\RoleM;
use projet_back\Manager\UserM;
use projet_back\Manager\ArticleM;




// echo of users ...

$user1 = new User(3,'Naruto', 'coucou',1);

//creat user 1
echo '<pre>';
print_r($user1);
echo '</pre>'.'<br>';

$user2 = new User(4,'eby','moi',2);
// creat user2
echo '<pre>';
print_r($user2);
echo '</pre>';

$userManager = new UserM();

// getAll user
echo '<pre>';
print_r($userManager->getAll());
echo '</pre>';

// Get simple user
echo '<pre>';
print_r($userManager->getuser(3));
echo '</pre>';


// DELETE FROM user ...
$userManager->deleteUser(4);


// ADD new article to  database "projet_back->table(article) ....

//creat article
$article1 = new Article(null,'sam','bon me revoici :)', 3);
$ArticleM = new ArticleM();
//$ArticleM->addArticle($article1);

// Get article
echo '<pre>';
print_r($ArticleM->getarticle(3));
echo '</pre>';

// creat roles ...

$role4 = new Role(null,'VIEW');
$RoleM = new RoleM();
//$RoleM->addRoles($role3);


// GET all roles ...

echo '<pre>';
print_r($RoleM->getAllRoles());
echo '</pre>';

// get simple roles ...

echo '<pre>';
print_r($RoleM->getRoles(4));
echo '</pre>';




