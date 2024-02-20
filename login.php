<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>


    <title>Log In</title>
</head>
<body>
<div class="container">
    <form class="row justify-content-center" action="admin/admin.php" method="post">
        <div class="w-100"></div>
        <div class="form-group mb-3 col-12 col-md-4 ">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="login" placeholder="Enter Your Username">
        </div>
        <div class="w-100"></div>

        <div class="form-group mb-3 col-12 col-md-4">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
        </div>
        <div class="w-100"></div>
        <div class="container mb-3 col-12 col-md-4 ">
            <button type="submit" class="btn btn-primary">Log In</button>
        </div>
    </form>
</div>
</body>
</html>

