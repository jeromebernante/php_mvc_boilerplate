<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo'Why you here?';
}else{
  echo '403 Forbidden';
  exit();
}
