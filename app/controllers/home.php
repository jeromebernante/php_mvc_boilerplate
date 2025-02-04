<?php
class Home extends MainController
{
  public function __construct()
  {
    // session condition
  }
  function index() //default method
  {
    $data['current_page'] = "Home";
    $data['controller'] = "home";
    $this->loadView("anonymous/home", $data);
    exit();
  }

}
