<?php


namespace projet_back\Manager;


use Entity\User;
use Classes\DB;


class UserM
{
        // GET all user
    public function getAll() {
        $user = [];
        $request = DB::getInstance()->prepare("SELECT * FROM user");
        $result = $request->execute();
        if($result) {
            $data = $request->fetchAll();
            foreach ($data as $user_data) {
                $user[] = new User($user_data['id'],$user_data['name'],$user_data['password'],$user_data['role_fk']);
            }
        }
        return $user;
    }

    // GET simple user
    public function getuser(int $id) {
        $user = [];
        $request = DB::getInstance()->prepare("SELECT * FROM user WHERE id=:id");
        $request->bindValue(':id', $id);
        $request->execute();
        $user_data = $request->fetch();
        if ($user_data) {
            $user[] = new User($user_data['id'],$user_data['name'],$user_data['password'],$user_data['role_fk']);
        }
        return $user;
    }

// add simple user to database

    public function addUser (User $user) {
        $request = DB::getInstance()->prepare("INSERT INTO user(name,password,role_fk) 
                                                     VALUE(:name,:password,:role_fk)");
        $request->bindValue(':name',$user->getName());
        $request->bindValue(':password',$user->getPassword());
        $request->bindValue(':role_fk',$user->getRoleFk());
        if($request->execute()) {
           echo 'utilisateur ajouté';
        }
    }

}

