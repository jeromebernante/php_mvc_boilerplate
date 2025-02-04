<?php
Class Admin_Login extends MainController
{
  public function __construct()
  {
    // session condition
  }
  function index() //default method
  {
    $data['current_page'] = "Admin Login";
    $this->loadView("admin/login",$data);
  }
}