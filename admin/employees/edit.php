<?php session_start();
require "../../app/controllers/employees.php";
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
                <a href="create.php" class="col-3 btn btn-success">Add Employee</a>
                <span class="col-1"></span>
                <a href="index.php" class="col-3 btn btn-warning">Manage Employees</a>
            </div>
            <div class="row title-table">
                <h2>Edit Employee</h2>
            </div>

            <div class="row add-employee">
                <form action="create.php" method="post" enctype="multipart/form-data">
                    <input name="id" value="<?= $id; ?>" type="hidden">
                    <div class="col mb-3">
                        <input type="text" name="first_name" value="<?= $first_name; ?>" class="form-control"
                               placeholder="First Name"
                               aria-label="First Name">
                    </div>
                    <span></span>
                    <div class="col mb-3">
                        <input type="text" name="last_name" value="<?= $last_name; ?>" class="form-control"
                               placeholder="Last Name"
                               aria-label="Last Name">
                    </div>
                    <div class="col mb-3">
                        <input type="text" name="role" value="<?= $role; ?>" class="form-control" placeholder="Role"
                               aria-label="Role">
                    </div>

                    <!--Choose File-->
                    <div class="input-group col mb-4 mt-4">
                        <input name="img" type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload
                        </label>
                    </div>

                    <div class="col">
                        <button name="employee-edit" class="btn btn-primary" style="width: 9rem" type="submit">Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <?php
} else {
    // User is not logged in, show a message or redirect to a login page
    echo '<h2>Вы кто такие? Я вас не звал, идите НА*уй</h2>';
    echo '<a href="../../login.php">Login</a>';
}
?>

<!--Footer-->
<!---->
</body>
</html>