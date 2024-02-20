<!-- Navigation -->
<?php require "path.php" ?>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent bg-opacity-50 fixed-top">
    <div class="container-fluid  shadow p-3 mb-5 bg-body rounded bg-opacity-75" style="max-width: 90%;">
        <a class="navbar-brand" href="/">
            <img src="../assets/img/logo.png" alt="Logo" style="width: 120px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarResponsive">
            <ul class="navbar-nav mx-auto mt-auto text-center">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL . "#serviceList" ?>">Services</a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="employee.php">Our Employees</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

