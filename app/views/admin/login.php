<?php $this->loadView("html_start", $data); ?>
<main class="container border border-danger">
  <div class="d-flex flex-column align-items-center">
    <div class="card shadow-lg" style="max-width: 400px; width: 100%;">
      <div class="card-body">
        <h3 class="card-title text-center mb-4">Admin Login</h3>
        <form>
          <!-- Username -->
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" required>
          </div>
          <!-- Password -->
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" required>
          </div>

          <!-- Login Button -->
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>

      </div>
    </div>
  </div>

</main>
<?php $this->loadView("html_end"); ?>
<script src="<?= ASSETS ?>guest/login.js?v=<?= time() ?>"></script>