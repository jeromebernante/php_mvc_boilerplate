<?php $this->loadView("html_start", $data); ?>
<main class="container border border-danger">
  <div class="d-flex flex-column align-items-center">
    <div class="card shadow-lg text-center" style="max-width: 400px; width: 100%;">
      <div class="card-body">
        <!-- Profile Picture -->
        <img src="https://via.placeholder.com/120" alt="Profile Picture" class="rounded-circle img-fluid mb-3" width="120">

        <!-- User Details -->
        <h4 class="card-title">John Doe</h4>
        <p class="text-muted">@johndoe</p>
        <p><strong>Email:</strong> johndoe@example.com</p>
        <p><strong>Location:</strong> New York, USA</p>
        <p><strong>Joined:</strong> January 2024</p>
        <!-- Edit Profile Button -->
        <a href="#" class="btn btn-danger w-100">Logout</a>
      </div>
    </div>
  </div>
</main>
<?php $this->loadView("html_end"); ?>
<script src="<?= ASSETS ?>guest/home.js?v=<?= time() ?>"></script>