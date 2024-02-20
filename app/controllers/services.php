<?php
require "../../database/db.php";
global $db2;

$id = '';
$service_name = '';
$description = '';
$duration = '';
$img = '';
$benefits = '';

$services = get_services_all('services');
//create service
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

    $service_name = ($_POST['service_name']);
    $description = ($_POST['description']);
    $duration = ($_POST['duration']);
    $benefits = ($_POST['benefits']);
    $img = ($_POST['img']);

    $service = [
        'service_name' => $service_name,
        'description' => $description,
        'img' => $img,
        'duration' => $duration,
        'benefits' => $benefits
    ];

    $id = insert($db2, 'services', $service);
    $service = selectOne($db2, 'services', ['id' => $id]);
    header('location' . '../../admin/services/index.php');

}

//update service
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $service = selectOne($db2, 'services', ['id' => $id]);
    $id = $service['id'];
    $service_name = $service['service_name'];
    $description = $service['description'];
    $duration = $service['duration'];
    $img = $service['img'];
    $benefits = $service['benefits'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['service-edit'])) {


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

    $service_name = ($_POST['service_name']);
    $description = ($_POST['description']);
    $duration = ($_POST['duration']);
    $benefits = ($_POST['benefits']);

    $service = [
        'service_name' => $service_name,
        'description' => $description,
        'img' => $img,
        'duration' => $duration,
        'benefits' => $benefits
    ];

    $id = $_POST['id'];
    $service_id = update($db2, 'services', $id, $service);
    header("Location:" . "../../admin/services/index.php");
}


//delete service
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    delete($db2, 'services', $id);
    header("Location:" . "../../admin/services/index.php");
}