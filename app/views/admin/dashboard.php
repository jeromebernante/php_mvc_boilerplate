<?php $this->loadView("html_start", $data); ?>
<div class="row g-0">
  <!-- Sidebar -->
  <nav class="col-md-3 col-lg-2 d-md-block bg-dark text-white sidebar p-3">
    <h4 class="text-center">Admin Panel</h4>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><i class="bi bi-house-door"></i> Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white active" href="#"><i class="bi bi-people"></i> Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><i class="bi bi-gear"></i> Settings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a>
      </li>
    </ul>
  </nav>
  <!-- Main Content -->
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
    <h2>User List</h2>
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>johndoe@example.com</td>
            <td>Admin</td>
            <td>
              <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
              <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</div>
<?php $this->loadView("html_end"); ?>
<script src="<?= ASSETS ?>admin/admin_dashboard.js?v=<?= time() ?>"></script>