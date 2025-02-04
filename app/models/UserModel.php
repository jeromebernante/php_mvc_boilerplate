<?php
class UserModel
{
    private $DB;

    public function __construct()
    {
        $this->DB = new Database();
    }

    // Get All Users
    public function getUsers()
    {
        $query = "SELECT * FROM users";
        $result = $this->DB->read($query);

        if (!$result) {
            error_log("SQL Error: " . $this->DB->getError() . " | Query: " . $query);
            return false;
        }
        return $result;
    }

    // Get a Single User by ID
    public function getUserById($id)
    {
        $query = "SELECT * FROM users WHERE id = ?";
        $params = [$id];
        $result = $this->DB->read($query, $params);

        if (!$result) {
            error_log("SQL Error: " . $this->DB->getError() . " | Query: " . $query);
            return false;
        }
        return $result[0] ?? null;
    }

    // Create a New User
    public function createUser($name, $email, $password, $role)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)";
        $params = [$name, $email, $hashedPassword, $role];

        $result = $this->DB->write($query, $params);
        return $result ? true : false;
    }

    // Update an Existing User
    public function updateUser($id, $name, $email, $role)
    {
        $query = "UPDATE users SET name = ?, email = ?, role = ? WHERE id = ?";
        $params = [$name, $email, $role, $id];

        $result = $this->DB->write($query, $params);
        return $result ? true : false;
    }

    // Delete a User
    public function deleteUser($id)
    {
        $query = "DELETE FROM users WHERE id = ?";
        $params = [$id];

        $result = $this->DB->write($query, $params);
        return $result ? true : false;
    }
}
