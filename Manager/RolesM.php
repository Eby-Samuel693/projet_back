<?php


namespace projet_back\Manager;

use Entity\Roles;
use Classes\DB;



class RolesM {


    public function __construct() {
        $this->DB = DB::getInstance();
    }

    public function getusers(): array
    {
        $roles = [];
        $request = DB::getInstance()->prepare("SELECT * FROM roles");
        $request->execute();
        $roles = $request->fetchAll();

        if($roles) {
            foreach($roles as $data) {
                $roles[] = new roles($data['id'], $data['roles'] );
            }
        }
        return $roles;

    }
}
