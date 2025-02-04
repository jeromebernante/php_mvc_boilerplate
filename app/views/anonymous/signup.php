<?php $this->loadView("html_start", $data); ?>
<?php $this->loadView("anonymous/components/nav", $data); ?>
<main class="container border border-danger">
  <div class="d-flex flex-column align-items-center">
    <div class="card shadow-lg" style="max-width: 450px; width: 100%;">
      <div class="card-body">
        <h3 class="card-title text-center mb-4">Sign Up</h3>
        <form>
          <!-- Full Name -->
          <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" placeholder="Enter full name" required>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
          </div>

          <!-- Username -->
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Choose a username" required>
          </div>

          <!-- Password -->
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Create password" required>
          </div>

          <!-- Confirm Password -->
          <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password" required>
          </div>

          <!-- Terms & Conditions -->
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="terms" required>
            <label class="form-check-label" for="terms">I agree to the Terms & Conditions</label>
          </div>

          <!-- Signup Button -->
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success">Sign Up</button>
          </div>
        </form>

        <!-- Already have an account -->
        <div class="mt-3 text-center">
          <p>Already have an account? <a href="#">Login here</a></p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php $this->loadView("html_end"); ?>
<script src="<?= ASSETS ?>guest/signup.js?v=<?= time() ?>"></script>