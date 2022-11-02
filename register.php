<?php header('Access-Control-Allow-Origin: *'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fix.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>

<body class="intros"style="background-color: #0a054ada;">
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="container border border-4 border-primary rounded-4 bg-blur">
            <div class="header text-center position-absolute top-0 start-50 translate-middle border border-4 border-primary bg-darkblue text-white rounded-4"
                style="width:12rem;font-size:2rem;">
                Register
            </div>
            <form id="form" >
                <div><i class="bi bi-person-circle row justify-content-center mt-5 mb-4 text-white"
                        style="font-size:5rem;"></i></div>
                <div class="form-floating">
                    <input type="text" class="form-control " id="username" placeholder="name" name="username">
                    <label for="floatingInput">Username</label>
                    <div class="mb-2">
                        <small>error message</small>
                    </div>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="email" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email</label>
                    <div class="mb-2">
                        <small>error message</small>
                    </div>
                </div>
                <div class="form-floating ">
                    <input type="password" class="form-control" id="password" placeholder="Password"
                        name="password_1">
                    <label for="floatingPassword">Password</label>
                    <div class="mb-2">
                        <small>error message</small>
                    </div>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password"
                        name="password_2">
                    <label for="floatingPassword">Confirm Password</label>
                    <div class="mb-2">
                        <small>error message</small>
                    </div>
                </div>
                <button type="submit" style="width: 28rem" class="btn btn-primary" name="reg_user">Sign in</button>
                <p class="text-center mt-2">สมัครสมาชิกเรียบร้อยแล้ว? <a href="login.php">เข้าสู่ระบบ</a></p>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
    
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

</body>

</html>