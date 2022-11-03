<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/fix.css">
</head>

<body class="container-fluid bg-dark bg-gradient" style="background-repeat: no-repeat;">
    <form>
        <div class="container mt-5 mb-4 border border-primary border-4 rounded-4 pt-3 bg-blur text-dark" style="width:50%;">
            <p>QR Payment</p>
            <label for="qrc_pay mt-3 mb-3">จำนวนเงิน : </label>
            <input type="hidden" name="tanium" value="<?php echo $_GET["tanium"]; ?>">
            <?php echo $_GET["tanium"]; ?><br>
            UID : <?php echo $_GET["user_id"]; ?><br>
            <input type="hidden" name="uid" value="<?php echo $_GET["user_id"]; ?>">
            Server : <?php echo $_GET["servern"]; ?>
            <input type="hidden" name="servern" value="<?php echo $_GET["servern"]; ?>">
            <br>
            <div class="col mt-3 mb-3" align="center">
                <img src="img/qrs.jpg " width="400" height="400" class="center">
            </div>
        </div>
        <div class="col mt-3 mb-3" align="center">
            <div class="d-grid gap-2 " align="center" style="width: 50%;">
                <button type="button" class="btn btn-success">ยืนยันการเลือกแพ็คเกจ</button>
            </div>
        </div>
    </form>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
        document.querySelector(".btn").addEventListener('click', function() {
            setTimeout(function() {
                Swal.fire({
                    icon: 'success',
                    title: "Thank You",
                    text: "ขอบคุณที่ใช้บริการเติมเกลือของเรา",
                    type: "success"
    }).then(function () {
      window.location = "index_user.php";
    });
            }, );
 });
    </script>
</body>

</html>