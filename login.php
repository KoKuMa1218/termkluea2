<?php
session_start();
include('server.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fix.css">
</head>


<body class="intros"style="background-color: #0a054ada;">   
    <div class="position-absolute top-50 start-50 translate-middle">        
        <div class="container border border-4 border-primary rounded-4 bg-blur">
            <div class="header text-center position-absolute top-0 start-50 translate-middle border border-4 border-primary bg-darkblue text-white rounded-4" style="width: 10rem;font-size:2rem">
                Login
            </div>
            <form action="login_db.php" method="post">
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="error">
                        <h3>
                            <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                            ?>
                        </h3>
                    </div>
                <?php endif ?>
                
                    <div><i class="bi bi-person-circle row justify-content-center mt-5 mb-4 text-white"style="font-size:5rem;"></i>
                    </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" required>
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <button type="submit mb-3" style="width: 28rem" class="btn btn-primary" name="login_user">Login</button>
                <p class="text-center mt-2">คุณยังไม่ได้เป็นสมาชิก<a href="register.php">สมัครสมาชิก</a></p>
        </div>
                
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
</body>

</html>
