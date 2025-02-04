$(document).ready(function () {
  fetchUsers(); // Call function on page load
});

// Fetch Users via AJAX
function fetchUsers() {
  $.ajax({
      url: "admin_dashboard/getUsers",
      type: "POST",
      dataType: "json",
      success: function (data) {
        console.log(data);
        
          let tableBody = $("tbody");
          tableBody.empty(); // Clear existing rows

          $.each(data, function (index, user) {
              let row = `
                  <tr>
                      <td>${user.id}</td>
                      <td>${user.name}</td>
                      <td>${user.email}</td>
                      <td>${user.role}</td>
                      <td>
                          <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                      </td>
                  </tr>
              `;
              tableBody.append(row);
          });
      },
      error: function (xhr, status, error) {
          console.error("Error fetching users:", error);
      }
  });
}
