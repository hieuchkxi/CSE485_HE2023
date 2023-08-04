<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees
    </title>
    <!--    CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" >List of employees</a>
                <button type="button" class="btn btn-success">+ Add New Employees</button>
                </div>
            </div>
        </nav>
    </header>
<main>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
    <table class="table table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Salary</th>
            <th scope="col" colspan="3" class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr class="table-active">
        <tr>
            <?php
            $users= [] ;
            foreach ($users as $user) {
            ?>
        <tr>
            <th scope="row"><?= $user->getId(); ?></th>
            <td><?= $user->getname(); ?></td>
            <td><?= $user->getAddress(); ?></td>
            <td><?= $user->getSalary(); ?></td>
            <td>
        </tr>
        <tr>
            <td>
                <a href="">
                    <i class="bi bi-eye-fill"></i>
                </a>
                <a href="">
                    <i class="bi bi-pencil-square"></i>
                </a>
                <a href="">
                    <i class="bi bi-trash3-fill"></i>
                </a>
            </td>
        </tr>
        </tbody>
    </table>
        </div>
    </nav>
    </div>
</main>
</body>