<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 13/02/2019
 * Time: 16:19
 */
namespace Controller;
use Model\Customer;
use Model\CustomerDB;
use Model\DBConnection;

class CustomerController
{
   public $customerDB;
   public function __construct()
   {
       //khoi tao 1 doi tuong PDO ben DBconnection
       $connection = new DBConnection("mysql:host=localhost;dbname=appmanager","duypham","Abc@123456");

       //gan gia tri cho customerDB = 1 doi tuong ben CustomerDB voi bien truyen vao la $connection->connect()(tra ve gia tri la bien $conn = new PDO(...)
       $this->customerDB = new CustomerDB($connection->connect());
   }

   public function add()
   {
        if ($_SERVER['REQUEST_METHOD'==='GET']){
            include "view/add.php";
        }else{
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $customer = new Customer($name,$email,$address);
            $this->customerDB->create($customer);
            $message = 'Customer created';
            include "view/add.php";
        }
   }
    public function index(){
        $customers = $this->customerDB->getAll();
        include 'view/list.php';
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer = $this->customerDB->get($id);
            include 'view/delete.php';
        } else {
            $id = $_POST['id'];
            $this->customerDB->delete($id);
            header('Location: index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer = $this->customerDB->get($id);
            include 'view/edit.php';
        } else {
            $id = $_POST['id'];
            $customer = new Customer($_POST['name'], $_POST['email'], $_POST['address']);
            $this->customerDB->update($id, $customer);
            header('Location: index.php');
        }
    }


}