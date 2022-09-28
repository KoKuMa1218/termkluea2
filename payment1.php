<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment1</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3 mb-3" style="border: 1px solid black;border-radius: 10px;width:50%;">

        <p>1 เลือกแพ็คเกจที่ต้องการเติม</p>
        <div class="col mt-3 mb-3" align="center">
            <tr>
                <td><img src="img/30ta.png" width="200" height="150"></a></td>
                <td><img src="img/150ta.png" width="200" height="150"></a></td>
                <td><img src="img/450ta.png" width="200" height="150"></a></td>
                <br><br>
                <td><img src="img/900ta.png" width="200" height="150"></a></td>
                <td><img src="img/1600ta.png" width="200" height="150"></a></td>
                <td><img src="img/3000ta.png" width="200" height="150"></a></td>
            </tr>
        </div>
    </div>
    <div class="container" style="border: 1px solid black;border-radius: 10px;width:50%;">
        <p>2 ขั้นตอนการทำรายการ</p>
        <div class="row ">
            <div class="col mt-3 mb-3" align="center">
                <label for="user_id">User ID</label>
                <input type="text" name="user_id" style="height: 30px;width: 200px;">
                <select name="servern" id="servern" style="height: 30px;width: 200px;">
                    <option value="scarlet">scarlet</option>
                    <option value="odyssey">odyssey</option>
                    <option value="gumigumi">gumigumi</option>
                    <option value="phantasia">phantasia</option>
                </select>
            </div>
        </div>
        <div class="com text-center">
            <a>โปรดระวัง |</a> <a style="color: red;">*หากใส่ UID ผิดไม่สามารถขอคืนเงินได้*</a>
        </div>
    </div>

    </div>
    </div>
    <div class="container mt-3 mb-3" style="border: 1px solid black;border-radius: 10px;width:50%;">
        <p>3 เลือกวิธีการชำระเงิน</p>
        <div class="col mt-3 mb-3" align="center">
            <tr>
                <td><img src="img/truewallet.jpg " width="150" height="75"></td>
                <td><img src="img/razergold.jpg" width="150" height="75"></td>
                <td><img src="img/dtac.jpg" width="150" height="75"></td>
                <br><br>
                <td><img src="img/qrc.jpg" width="150" height="75"></td>
                <td><img src="img/crd.png" width="150" height="75"></td>
            </tr>
        </div>
    </div>
    <div class="col" align="center">
        <div class="d-grid gap-2 " align="center" style="width: 50%;">
            <button type="button " class="btn btn-danger"><a href="payment2.php" style="color: white;">ยืนยันการเลือกแพ็คเกจ</a></button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>