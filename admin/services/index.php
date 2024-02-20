<?php
require "../../app/controllers/services.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
    <title>Admin Panel</title>
</head>
<body>
<!--Header-->
<!---->
<?php
if (!empty($_SESSION["login"])) {
// User is logged in, show the page content
    ?>
    <div class="container">
        <?php require "../../blocks/admsidebar.php"; ?>


        <div class="employees col-9">
            <div class="button row">
                <a href="create.php" class="col-3 btn btn-success">Add Service</a>
                <span class="col-1"></span>
                <a href="index.php" class="col-3 btn btn-warning">Manage Services</a>
            </div>


            <div class="row title-table">
                <h2>Control Services</h2>
                <div class="col-1">ID</div>
                <div class="col-2">Service Name</div>
                <div class="col-2">Description</div>
                <div class="col-1">Duration</div>
                <div class="col-2">Benefits</div>
                <div class="col-2">Image</div>
            </div>
            <?php foreach ($services as $key => $service): ?>
                <div class="row employee">
                    <div class="col-1"><?= $service['id']; ?></div>
                    <div class="col-2"><?= $service['service_name']; ?></div>
                    <div class="col-2"><?= $service['description']; ?></div>
                    <div class="col-1"><?= $service['duration']; ?></div>
                    <div class="col-2"><?= $service['benefits']; ?></div>
                    <div class="col-2"><?= $service['img']; ?></div>
                    <div class="update col-1"><a href="edit.php?id=<?= $service['id']; ?>">Update</a></div>
                    <div class="delete col-1"><a href="edit.php?delete_id=<?= $service['id']; ?>">Delete</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
} else {
    // User is not logged in, show a message or redirect to a login page
    echo '<h2>It seems like you are not Signed in</h2>';
    echo '<a href="../../login.php">Login</a>';
}
?>
<!--Footer-->
<!---->
</body>
</html>