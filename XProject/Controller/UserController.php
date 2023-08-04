<?php
include "XProject/repositories/EmployeesRepository.php";

class UserController
{
    public function index()
    {
        //Gọi dữ liệu ra
        $userRepo = new EmployeesRepository();
        $users = $userRepo->getAllUsers();
        include "XProject/Employees/index.php";
    }
}
