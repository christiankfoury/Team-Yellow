<?php

namespace app\models;

class User extends \app\core\Model
{
    public $username;
    public $first_name;
    public $last_name;
    public $password_hash;
    public $password;
    public $two_factor_token;
    public $type;

    public function __construct()
    {
        parent::__construct();
    }

    public function get($username)
    {
        $SQL = 'SELECT * FROM user WHERE username LIKE :username';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['username' => $username]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\User');
        return $STMT->fetch(); //return the record
    }

    public function insertDefaultAdmin() {
        $this->password_hash = password_hash('123', PASSWORD_DEFAULT);
        $SQL = 'INSERT INTO `user`(`username`, `first_name`, `last_name`, `password_hash`, `two_factor_token`, `type`) VALUES (:username, :first_name, :last_name, :password_hash, :two_factor_token, :type)';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['username'=>'admin', 'first_name'=>'Thilshan', 'last_name'=> 'Shunmugalingam', 'password_hash'=>$this->password_hash, 'two_factor_token'=>null, 'type'=>'administrator']);
    }

    public function insert()
    {
        $this->password_hash = password_hash($this->password, PASSWORD_DEFAULT);
        $SQL = 'INSERT INTO user(username, password_hash) VALUES (:username,:password_hash)';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['username' => $this->username, 'password_hash' => $this->password_hash]); //associative array with key => value pairs
    }

    public function update()
    {
        $this->password_hash = password_hash($this->password, PASSWORD_DEFAULT);
        $SQL = 'UPDATE `user` SET password_hash=:password_hash WHERE username = :username';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['password_hash' => $this->password_hash, 'username' => $this->username]); //associative array with key => value pairs
    }

    public function getAll() {
        $SQL = 'SELECT * FROM user';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\User');
        return $STMT->fetchAll();
    }
}
