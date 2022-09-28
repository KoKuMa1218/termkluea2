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
        <p>4 QR Payment</p>
        <label for="qrc_pay mt-3 mb-3">ระบุจำนวนเงิน</label>
        <br>
        <input type="text" name="qrc_pay" style="width: 100%;">
        <div class="col mt-3 mb-3" align="center">
            <img src="img/qrs.jpg " width="400" height="400" class="center">
        </div>
    </div>
    <div class="col mt-3 mb-3" align="center">
        <div class="d-grid gap-2 " align="center" style="width: 50%;">
            <button type="button" class="btn btn-success"><a href="payment2.php" style="color: white;">ยืนยันการเลือกแพ็คเกจ</a></button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>