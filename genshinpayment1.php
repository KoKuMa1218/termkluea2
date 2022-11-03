<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOFpayment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fix.css">
    <link rel="stylesheet" href="css/main.css">


</head>

<body class="bg-dark bg-gradient">
    <nav class="navbar sticky-top navbar-expand-lg " style="background-color: #050224;">
        <div class="container-fluid">
            <a class="navbar-brand text-white text-center px-3" href="index.php">
                <h1><img src="img/salt.png" alt="" width="60">เติมเกลือ
                    <h4>เพราะชีวิตขาดเค็มไม่ได้</h4>
                </h1>
            </a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="row">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active text-white" style="font-size:2rem" aria-current="page" href="index_user.php">หน้าหลัก</a>
                        <a class="nav-link active text-white" style="font-size:2rem;">คุณ... </a>
                        <a class="nav-link active " href="index.php?logout='1'" style="color: red;font-size:2rem;">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="intro">
        <div class="intro-slideshow">
            <img src="https://images.alphacoders.com/127/1273175.jpg" alt="1">
            <img src="img/genshin-banner.jpg" alt="">
            <div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle border boder-3 rounded-4 " style="background-color: rgba(0, 0, 0 , 0.6)">
                <h1 class="fs-1 fw-bolder text-sm-center">Genshin Impact</h1>
                <p class="fs-5 fw-bolder text-sm-center">Genshin Impact" คือเกมผจญภัยแนว RPG แบบโอเพ่นเวิลด์ใหม่ ซึ่งผลิตโดยบริษัท miHoYo</p>
            </div>
        </div>
    </div>

    <script>
        const slideshowImages = document.querySelectorAll(".intro .intro-slideshow img");

        const nextImageDelay = 3000;
        let currentImageCounter = 0; // setting a variable to keep track of the current image (slide)


        slideshowImages[currentImageCounter].style.opacity = 1;

        setInterval(nextImage, nextImageDelay);

        function nextImage() {

            slideshowImages[currentImageCounter].style.opacity = 0;

            currentImageCounter = (currentImageCounter + 1) % slideshowImages.length;

            /* slideshowImages[currentImageCounter].style.display = "block"; */
            slideshowImages[currentImageCounter].style.opacity = 1;
        }
    </script>

    <div>
        <form action="genshinpayment2.php" method="get">
            <div class="container mt-3 mb-3 border border-primary border-4 rounded-4 pt-3 bg-blur text-white" style="width:50%;">
                <p>1 เลือกแพ็คเกจที่ต้องการเติม</p>
                <div class="col mt-3 mb-3" align="center">
                    <div class="row gap-2">
                        <!-- <tr> -->
                        <div class="col">
                            <input class="form-check-input" type="radio" id="r1" name="tanium" <?php if (isset($tanium) && $tanium == 35) echo "checked"; ?> value=35 required>
                            <label for="r1">
                                <td><img src="img/primo60.png" width="200" height="150"></a></td>
                            </label>
                        </div>

                        <div class="col">
                            <input class="form-check-input" type="radio" id="r2" name="tanium" <?php if (isset($tanium) && $tanium == 179) echo "checked"; ?> value=179>
                            <label for="r2">
                                <td><img src="img/primo300.png" width="200" height="150"></a></td>
                            </label>
                        </div>

                        <div class="col">
                            <input class="form-check-input" type="radio" id="r3" name="tanium" <?php if (isset($tanium) && $tanium == 549) echo "checked"; ?> value=549>
                            <label for="r3">
                                <td><img src="img/primo980.png" width="200" height="150"></a></td>
                            </label>
                        </div>

                        <div class="col">
                            <input class="form-check-input" type="radio" id="r4" name="tanium" <?php if (isset($tanium) && $tanium == 1100) echo "checked"; ?> value=1100>
                            <label for="r4">
                                <td><img src="img/primo1980.png" width="200" height="150"></a></td>
                            </label>
                        </div>

                        <div class="col">
                            <input class="form-check-input" type="radio" id="r5" name="tanium" <?php if (isset($tanium) && $tanium == 1800) echo "checked"; ?> value=1800>
                            <label for="r5">
                                <td><img src="img/primo3280.png" width="200" height="150"></a></td>
                            </label>
                        </div>

                        <div class="col">
                            <input class="form-check-input" type="radio" id="r6" name="tanium" <?php if (isset($tanium) && $tanium == 3700) echo "checked"; ?> value=3700>
                            <label for="r6">
                                <td><img src="img/primo6480.png" width="200" height="150"></a></td>
                            </label>
                        </div>

                    </div>
                    <!-- </tr> -->

                </div>
            </div>
            <div class="container border border-primary border-4 rounded-4 pt-3 bg-blur" style="width:50%;">
                <p class="text-white">2 ขั้นตอนการทำรายการ</p>
                <div class="row pb-3">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control ms-2" style="width:95%" id="floatingInputGrid" placeholder="name@example.com" name="user_id" value="" required>
                                <label for="floatingInputGrid">UID</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" id="servern" name="servern">
                                    <option value="America">America</option>
                                    <option value="Europe">Europe</option>
                                    <option value="Asia">Asia</option>
                                    <option value="TW,HK,MO">TW,HK,MO</option>
                                </select>
                                <label for="floatingSelectGrid">Select Server</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="com text-center text-white pb-2">
                    <a>โปรดระวัง |</a> <a style="color: red;">*หากใส่ UID ผิดไม่สามารถขอคืนเงินได้*</a>
                </div>
            </div>

    </div>

    <div class="col-12 mt-3 mb-3" align="center">
        <div class="d-flex gap-2 justify-content-center" align="center" style="width: 50%;">
            <button type="submit" class="btn btn-danger text-center">ยืนยันการเลือกแพ็คเกจ</a></button>
        </div>
    </div>




    </form>
    </div>
    <section class="Footer">
        <a href="https://www.facebook.com/TERMKLUEA/" class="bi bi-facebook text-white" style="font-size:3rem; text-decoration: none;">TERM_KLUEA</a>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-transparent', 'shadow');
            } else {
                nav.classList.remove('bg-transparent', 'shadow');
            }
        });
    </script>
</body>

</html>