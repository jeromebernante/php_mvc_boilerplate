<?php
Class Admin_Dashboard extends MainController
{
  public function __construct()
  {
    // session condition
  }
  function index() //default method
  {
    $data['current_page'] = "Admin Dashboard";
    $this->loadView("admin/dashboard",$data);
  }
  
  function getUsers()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $USER = $this->loadModel("UserModel");
      $result = $USER->getUsers();

      header('Content-Type: application/json');
      echo json_encode($result);
    } else {
      $this->loadView("404");
      exit();
    }
  }
}