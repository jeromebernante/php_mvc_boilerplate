<?php 
$data['current_page'] = strtolower($data['current_page']);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">My Website</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= ($data['current_page'] == 'home') ? 'active' : '' ?>" href="<?=DOMAIN?>home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($data['current_page'] == 'login') ? 'active' : '' ?>" href="<?=DOMAIN?>login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($data['current_page'] == 'signup') ? 'active' : '' ?>" href="<?=DOMAIN?>signup">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($data['current_page'] == 'contact') ? 'active' : '' ?>" href="<?=DOMAIN?>contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>