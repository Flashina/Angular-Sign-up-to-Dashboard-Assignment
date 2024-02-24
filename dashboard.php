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
            <?php
            session_start();
            if (isset($_SESSION['welcome'])) {
                // echo '<h4 class="shadow-lg p-3 rounded-4 my-4">' . $_SESSION['welcome'] . '</h4>';
                echo '<h4 class="shadow-lg p-3 rounded-4 my-4">' . $_SESSION['welcome'] . '</h4>';
                
            }
            ?>
        </div>

    </div>
</body>
</html>