<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOFpayment</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <form action="TOFpayment2.php" method="get">
        <div class="container mt-3 mb-3" style="border: 1px solid black;border-radius: 10px;width:50%;">

            <p>1 เลือกแพ็คเกจที่ต้องการเติม</p>
            <div class="col mt-3 mb-3" align="center">
                <tr>
                    <input type="radio" id="r1" name="tanium" <?php if (isset($tanium) && $tanium == 30) echo "checked"; ?> value=30 required>
                    <label for="r1">
                        <td><img src="img/30ta.png" width="200" height="150"></a></td>
                    </label>

                    <input type="radio" id="r2" name="tanium" <?php if (isset($tanium) && $tanium == 150) echo "checked"; ?> value=150>
                    <label for="r2">
                        <td><img src="img/150ta.png" width="200" height="150"></a></td>
                    </label>

                    <input type="radio" id="r3" name="tanium" <?php if (isset($tanium) && $tanium == 450) echo "checked"; ?> value=450>
                    <label for="r3">
                        <td><img src="img/450ta.png" width="200" height="150"></a></td>
                    </label>
                    <br><br>
                    <input type="radio" id="r4" name="tanium" <?php if (isset($tanium) && $tanium == 900) echo "checked"; ?> value=900>
                    <label for="r1">
                        <td><img src="img/900ta.png" width="200" height="150"></a></td>
                    </label>

                    <input type="radio" id="r5" name="tanium" <?php if (isset($tanium) && $tanium == 1600) echo "checked"; ?> value=1600>
                    <label for="r2">
                        <td><img src="img/1600ta.png" width="200" height="150"></a></td>
                    </label>

                    <input type="radio" id="r6" name="tanium" <?php if (isset($tanium) && $tanium == 3000) echo "checked"; ?> value=3000>
                    <label for="r3">
                        <td><img src="img/3000ta.png" width="200" height="150"></a></td>
                    </label>

                </tr>
            </div>
        </div>
        <div class="container" style="border: 1px solid black;border-radius: 10px;width:50%;">
            <p>2 ขั้นตอนการทำรายการ</p>
            <div class="row ">

                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="user_id" value="" required>
                            <label for="floatingInputGrid">UID</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" id="servern"  name="servern">
                                <option value="scarlet">scarlet</option>
                                <option value="odyssey">odyssey</option>
                                <option value="gumigumi">gumigumi</option>
                                <option value="phantasia">phantasia</option>
                            </select>
                            <label for="floatingSelectGrid">Select Server</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="com text-center">
                <a>โปรดระวัง |</a> <a style="color: red;">*หากใส่ UID ผิดไม่สามารถขอคืนเงินได้*</a>
            </div>
        </div>

        </div>
        </div>
        <!-- <div class="container mt-3 mb-3" style="border: 1px solid black;border-radius: 10px;width:50%;">
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
        </div> -->
        <div class="col mt-3" align="center">
            <div class="d-grid gap-2 " align="center" style="width: 50%;">
                <button type="submit " class="btn btn-danger">ยืนยันการเลือกแพ็คเกจ</a></button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>