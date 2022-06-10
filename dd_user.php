<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User Info Dashboard</h5>
                        <p class="card-text">
                            <?php
                                echo "Welcome " . $_SESSION['user_name'] . "!<br>";
                                echo "Your email is " . $_SESSION['user_email'] . ".";
                            ?>
                        <a href="dd_logout.php" class="btn btn-primary">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>
</body>

</html>