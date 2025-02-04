<?php
Class Signup extends MainController
{
  public function __construct()
  {
    // session condition
  }
  function index() //default method
  {
    $data['current_page'] = "Signup";
    $this->loadView("anonymous/signup",$data);
  }

  function invalidPage() //invalid the page if the method if doesn't exist
  {
    $data['current_page'] = "Invalid Page";
    $this->loadView("404",$data);
  }

}