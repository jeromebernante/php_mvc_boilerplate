<?php

class Logout extends MainController
{
  function index()
  {
    $UserModel = $this->loadModel("UserModel");
    $UserModel->logout();
    header("Location: ");
    exit();
  }
}
