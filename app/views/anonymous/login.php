<?php $this->loadView("html_start", $data); ?>
<?php $this->loadView("anonymous/components/nav", $data); ?>
<main class="container border border-danger">
  <div class="d-flex flex-column align-items-center">
    <div class="card shadow-lg" style="max-width: 400px; width: 100%;">
      <div class="card-body">
        <h3 class="card-title text-center mb-4">Login</h3>
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

          <!-- Remember me -->
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label" for="remember">Remember me</label>
          </div>

          <!-- Login Button -->
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>

        <!-- Forgot Password -->
        <div class="mt-3 text-center">
          <a href="#">Forgot password?</a>
        </div>
      </div>
    </div>
  </div>

</main>
<?php $this->loadView("html_end"); ?>
<script src="<?= ASSETS ?>guest/login.js?v=<?= time() ?>"></script>