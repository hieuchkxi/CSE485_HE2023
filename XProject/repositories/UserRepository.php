<?php
include "XProject/lib/DBConnection.php";
include "XProject/models/User.php";
Class UserRepository
{
    public function getAllUsers()
    {
        try {
            $db = new DBConnection();
            $conn = $db->connect();
            //2. Thực hiện truy vấn
            $sql = "SELECT * FROM employees";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            $users = [];
            foreach ($result as $row) {
                $user = new User();
                $user->setUserId($row['id']);
                $user->setEmail($row['Name']);
                $user->setPassword($row['Address']);
                $user->setUsername($row['Salary']);
                array_push($users, $user);
            }
            return $users;
        } catch (PDOException $e) {
            return null;
        }
    }
}