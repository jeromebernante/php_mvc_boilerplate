<?php $this->loadView("html_start", $data); ?>


<?php $this->loadView("anonymous/components/nav", $data); ?>
<main class="container border border-danger">
  <h1>HOME PAGE</h1>
  <h3>The default landing page is set in the .env file as 'home'.</h3>
</main>

<?php $this->loadView("html_end"); ?>
<script src="<?= ASSETS ?>anonymous/home.js?v=<?= time() ?>"></script>