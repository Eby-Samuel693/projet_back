<?php


namespace Entity;

use Classes\DB;


class User {


    private ?int $id;
    private string $name;
    private string $password;
    private string $role_fk;

    public function __construct(?int $id  ,string $name ,string $password , string $role_fk) {
        $this->DB = DB::getInstance();
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->role_fk = $role_fk;
    }

    /**
     * @return mixed
     */
    public function getRoleFk() : string
    {
        return $this->role_fk;
    }

    /**
     * @param mixed $role_fk
     */
    public function setRoleFk($role_fk): void
    {
        $this->role_fk = $role_fk;
    }



    /**
     * @return mixed
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getpassword(): string
    {
        return $this->password;
    }

    /**
     * @param mixed $email
     */
    public function setpassword($password): void
    {
        $this->password = $password;
    }


}
