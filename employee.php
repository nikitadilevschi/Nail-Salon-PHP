<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>


    <title>Glossy Glamour</title>
</head>

<body>
<?php include "database/db.php"; ?>

<?php require "blocks/header.php"; ?>

<!--Employees-->
<div class="container-block container" style="padding-top: 5%">
    <p class="text-blk team-head-text">
        Our Team
    </p>
    <div class="responsive-container-block teamcard-container">
        <?php
        $employees = get_employees_all('employees');
        foreach ($employees

                 as $employee): ?>
            <div class="responsive-cell-block wk-desk-3 wk-mobile-12 wk-tab-4 wk-ipadp-4 team-card-container">
                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img class="team-img"
                        <img src="<?php echo $employee["img"]; ?>" alt="">
                    </div>
                    <div class="team-card-content">
                        <p class="text-blk name">
                            <?php echo $employee["first_name"] . " " . $employee["last_name"]; ?>
                        </p>
                        <p class="text-blk position">
                            <?php echo $employee["role"]; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?php require "blocks/footer.php" ?>

</body>

</html>
