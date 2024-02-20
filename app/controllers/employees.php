<?php
require "../../database/db.php";
global $db1;

$id = '';
$first_name = '';
$last_name = '';
$role = '';
$img = '';

$employees = get_employees_all('employees');

//Add Employee
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-save'])) {

    // Upload image
    if (!empty($_FILES['img']['name'])) {
        $imgName = $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $destination = "../../assets/img/" . $imgName;

        $result = move_uploaded_file($fileTmpName, $destination);

        if ($result) {
            $_POST['img'] = "assets/img/" . $imgName;
        }
    }

    $first_name = ($_POST['service_name']);
    $last_name = ($_POST['description']);
    $role = ($_POST['duration']);
    $img = ($_POST['img']);

    $employee = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'img' => $img,
        'role' => $role,
    ];

    $id = insert($db1, 'employees', $employee);
    $employee = selectOne($db1, 'employees', ['id' => $id]);
    header("Location:" . "../../admin/employees/index.php");

}

//update Employee
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $employee = selectOne($db1, 'employees', ['id' => $id]);
    $id = $employee['id'];
    $first_name = $employee['first_name'];
    $last_name = $employee['last_name'];
    $role = $employee['role'];
    $img = $employee['img'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['employee-edit'])) {

    // Upload image
    if (!empty($_FILES['img']['name'])) {
        $imgName = $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $destination = "../../assets/img/" . $imgName;

        $result = move_uploaded_file($fileTmpName, $destination);

        if ($result) {
            $img = "assets/img/" . $imgName;
        } else {
            $img = "";
        }
    } else {
        $img = ($_POST['img']);
    }

    $first_name = ($_POST['first_name']);
    $last_name = ($_POST['last_name']);
    $role = ($_POST['role']);

    $employee = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'img' => $img,
        'role' => $role,
    ];

    $id = $_POST['id'];
    $employee_id = update($db1, 'employees', $id, $employee);
    header("Location:" . "../../admin/employees/index.php");

}


//delete service
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    delete($db1, 'employees', $id);
    header("Location:" . "../../admin/employees/index.php");
}