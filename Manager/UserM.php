<?php


namespace projet_black\Manager;

use Entity\User;
use Classes\DB;
use PDO;


class UserM
{

    public function __construct() {
        $this->DB = DB::getInstance();

    }

    public function getuser(?int $id): user {
        $request = DB::getInstance()->prepare("SELECT * FROM user WHERE id=:id");
        $request->bindValue(':id', $id);
        $request->execute();
        $user_data = $request->fetch();
        $user = new user();
        if ($user_data) {
            $user->setId($user_data['id']);
            $user->setName($user_data['name']);
            $user->setPassword($user_data['password']);
            $user->setRoleFk($user_data['roles_fk']);
        }
        return $user;
    }

// add one user to database

    public function addUser (?int $id) {
        $this->User = new User();
        $request = DB::getInstance()->prepare("INSERT INTO user(id,name,password,role_fk) 
                                                     VALUE(?,?,?,?)");
        $request->bindValue(':id', $id);
        $request->execute();
        $user_data = $request->fetch();
        $user = new user();
        if ($user_data) {
            $user->setId($user_data['id']);
            $user->setName($user_data['raptorn']);
            $user->setPassword($user_data['password']);
            $user->setRoleFk($user_data['ADMIN']);
        }
        return $user;
    }

}

