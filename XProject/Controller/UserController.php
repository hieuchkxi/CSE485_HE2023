<?php
include "XProject/repositories/UserRepository.php";

class UserController
{
    public function index()
    {
        //Gọi dữ liệu ra
        $userRepo = new UserRepository();
        $users = $userRepo->getAllUsers();
        include "XProject/User/index.php";
    }
}
