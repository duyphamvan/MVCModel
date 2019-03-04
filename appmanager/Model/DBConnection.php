<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 13/02/2019
 * Time: 15:17
 */

namespace Model;
use PDO;
use PHPUnit\Runner\Exception;

class DBConnection
{
   public $dsn;
   public $username;
   public $password;

   public function __construct($dsn,$username,$password)
   {
       $this->dsn = $dsn;
       $this->username = $username;
       $this->password = $password;
   }

   public function connect()
   {
       try{
           $conn = new PDO($this->dsn,$this->username,$this->password);
       }catch (Exception $exception){
           $exception->getMessage();
       }
       return $conn;
   }
}