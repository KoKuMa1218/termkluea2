<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
</head>

<body>

    <div class="container mt-3 mb-3" style="border: 1px solid black;border-radius: 10px;width:50%;">
        <div class="col mt-3 mb-3" align="center">
            <img src="img/ch.gif " width="200" height="200" class="center">
        </div>
        <div class="col mt-3 mb-3" align="center">
            <p>ชำระเงินเสร็จสิ้น</p>
        </div>
        <label for="qrc_pay mt-3 mb-3" >
            จำนวนเงิน : <?php echo $_GET["tanium"]; ?></label><br>
        UID : <?php echo $_GET["uid"]; ?><br>
        Server : <?php echo $_GET["servern"]; ?>
        <div class="col mt-3 mb-3" align="center">
            Thank You <br>
            ขอบคุณที่ใช้บริการเติมเกลือของเรา
        </div>
        <?php header("refresh:3; url=index_user.php");  ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>
