<?php


namespace projet_back\Manager;

use Entity\Role;
use Classes\DB;



class RoleM {


    public function addRoles (Role $roles) {
        $request = DB::getInstance()->prepare("INSERT INTO roles(name) 
                                                        VALUE(:roles)");
        $request->bindValue(':roles',$roles->getRoles());
        if($request->execute()) {
            echo 'role ajouté';
        }
    }


    // get all roles ...

    public function getAllRoles() {
        $roles = [];
        $request = DB::getInstance()->prepare("SELECT * FROM roles");
        $result = $request->execute();
        if($result) {
            $data = $request->fetchAll();
            foreach ($data as $roles_data) {
                $roles[] = new Role($roles_data['id'],$roles_data['name']);
            }
        }
        return $roles;
    }



    // get roles

    public function getRoles(int $id) {
        $roles = [];
        $request = DB::getInstance()->prepare("SELECT * FROM roles WHERE id=:id");
        $request->bindValue(':id', $id);
        $request->execute();
        $roles_data = $request->fetch();
        if ($roles_data) {
            $roles[] = new Role($roles_data['id'],$roles_data['name']);
        }
        return $roles;
    }


}
