<?php
Class Login extends MainController
{
  public function __construct()
  {
    // session condition
  }
  function index() //default method
  {
    $data['current_page'] = "Login";
    $this->loadView("anonymous/login",$data);
  }
}