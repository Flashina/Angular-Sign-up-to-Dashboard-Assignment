<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mx-auto col-6 p-4 my-5">
            <form action="index.php" method="post">
                <h2 class="text-center shadow-lg p-2 rounded-4 my-4">SIGNUP PAGE</h2>
                <?php
                session_start();
                if (isset($_SESSION['message'])) {
                    echo "<div class='text-danger fw-bold text-center'>".$_SESSION['message']."</div>";
                }
                ?>
                <div class="form-group">
                    <label for="">FIRST NAME</label>
                    <input type="text" class="form-control my-2" name="firstname">
                </div>
                <div class="form-group">
                    <label for="">LAST NAME</label>
                    <input type="text" class="form-control my-2" name="lastname">
                </div>
                <div class="form-group">
                    <label for="">EMAIL</label>
                    <input type="text" class="form-control my-2" name="email">
                </div>
                <div class="form-group">
                    <label for="">ADDRESS</label>
                    <input type="text" class="form-control my-2" name="address">
                </div>
                <div class="form-group">
                    <label for="">PASSWORD</label>
                    <input type="text" class="form-control my-2" name="password">
                </div>
                <div class="form-group my-2 text-center">
                    <button class="btn btn-outline-dark w-50" type="submit" name="signup">Sign Up</button>
                </div>
            </form>
        </div>

    </div>
</body>
</html>