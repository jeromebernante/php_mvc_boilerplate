<?php
class User_Profile extends MainController
{
  public function __construct()
  {
    // session condition
  }
  function index() //default method
  {
    $data['current_page'] = "User Profile";
    $this->loadView("user/profile", $data);
  }


  function invalidPage()
  {
    $data['current_page'] = "Invalid Page";
    $this->loadView("404", $data);
  }
}
