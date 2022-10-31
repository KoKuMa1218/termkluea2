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
    <title>TermKluea</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #050224;">
        <div class="container-fluid">
            <a class="navbar-brand text-white text-center px-3" href="index.php">
                <h1>เติมเกลือ<br>
                    <h4>เพราะชีวิตขาดเค็มไม่ได้</h4>
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="row">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-white"style="font-size:2rem" aria-current="page" href="index_user.php">หน้าหลัก</a>
                    <a><?php if (isset($_SESSION['username'])) : ?></a>
                        <a class="nav-link active text-white" style="font-size:2rem;">คุณ <?php echo $_SESSION['username']; ?></a>
                        <a class="nav-link active " href="index.php?logout='1'" style="color: red;font-size:2rem;">Logout</a>
                    <?php endif ?>                   
                </div>
            </div>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div class="intro">
        <div class="intro-slideshow">
            <img src="img/genshin-banner.jpg" alt="1">
            <img src="img/tof-banner.jpg" alt="2">
            <img src="img/valorant_banner.jpg" alt="3">
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




<section class="grid-game">
        <div class="game">
            <h1>เติมเกมออนไลน์</h1>
            <h5>GAMEONLINE TOPUP</h5><br>
            <div class="container">
                <div class="grid-container">
                    <ul>
                        <li><a href="TOFpayment1.php" class="col-4 col-md-2 text-center"><img src="img/TOF_logo.jpg">
                                <div class="product-title"><br><b>Tower of Fantasy</b></div>
                            </a></li>
                        <li><a href="Genshintopup.html" class="col-4 col-md-2 text-center"><img src="img/Genshin-logo.png">
                                <div class="product-title"><br><b>Genshin Impact</b></div>
                            </a></li>
                        <li><a href="TOFtopup.html" class="col-4 col-md-2 text-center"><img src="img/honkaiimpact3_logo.jpg">
                                <div class="product-title"><br><b>Honkai Impact 3</b></div>
                            </a></li>
                        <li><a href="valorant.html" class="col-4 col-md-2 text-center"><img src="img/valorant_logo.jpg">
                                <div class="product-title"><br><b>valorant</b></div>
                            </a></li>
                        <li><a href="PUBG.html" class="col-4 col-md-2 text-center"><img src="img/PUBG_logo.png">
                                <div class="product-title"><br><b>PUBG MOBILE</b></div>
                            </a></li>
                        <li><a href="rov.html" class="col-4 col-md-2 text-center"><img src="img/rov_logo.png">
                                <div class="product-title"><br><b>ROV</b></div>
                            </a></li>
                        <li><a href="TOFtopup.html" class="col-4 col-md-2 text-center"><img src="img/diablo_logo.jpg">
                                <div class="product-title"><br><b>Diablo Immortal</b></div>
                            </a></li>
                        <li><a href="TOFtopup.html" class="col-4 col-md-2 text-center"><img src="img/raknarok_tac2_logo.png">
                                <div class="product-title"><br><b>Ragnarok Tactics 2</b></div>
                            </a></li>
                        <li><a href="TOFtopup.html" class="col-4 col-md-2 text-center"><img src="img/dragonraja_logo.png">
                                <div class="product-title"><br><b>Dragon Raja</b></div>
                            </a></li>
                        <li><a href="TOFtopup.html" class="col-4 col-md-2 text-center"><img src="img/freefire_logo.png">
                                <div class="product-title"><br><b>Free Fire</b></div>
                            </a></li>
                        <li><a href="TOFtopup.html" class="col-4 col-md-2 text-center"><img src="img/ApexLegendMobile_logo.jpg">
                                <div class="product-title"><br><b>Apex Legend Mobile</b></div>
                            </a></li>
                        <li><a href="TOFtopup.html" class="col-4 col-md-2 text-center"><img src="img/lol_logo.png">
                                <div class="product-title"><br><b>League of Legends</b></div>
                            </a></li>
                        <li><a href="TOFtopup.html" class="col-4 col-md-2 text-center"><img src="img/lor_logo.jpg">
                                <div class="product-title"><br><b>League of Runeterra</b></div>
                            </a></li>
                        <li><a href="TOFtopup.html" class="col-4 col-md-2 text-center"><img src="img/onmyojiarena_logo.jpg">
                                <div class="product-title"><br><b>Onmyoji Arena</b></div>
                            </a></li>
                        <li><a href="TOFtopup.html" class="col-4 col-md-2 text-center"><img src="img/lolwildrift_logo.png">
                                <div class="product-title"><br><b>League of Legends Wildrift</b></div>
                            </a></li>
                    </ul>


                    <div class="load-more">
                    <button type="button" class="btn btn-warning">SEE MORE</button>
                    </div>
                    <script>
                        let loadMoreBtn = document.querySelector('.load-more');
                        let currentItem = 10;

                        loadMoreBtn.onclick = () => {
                            let boxes = [...document.querySelectorAll('.grid-container ul li')];
                            for (var i = currentItem; i < currentItem + 30; i++) {
                                boxes[i].style.display = 'inline-block';
                            }
                            currentItem += 10;

                            if (currentItem >= boxes.length) {
                                loadMoreBtn.style.display = 'none';
                            }
                        }
                    </script>

                </div>
            </div>
        </div>



    </section>

    <section class="grid-game">
        <div class="game"style="background-color:#222">
            <h1>เติมเงินอื่นๆ</h1>
            <h5>OTHER TOPUP</h5><br>
            <div class="container">
                <div class="grid-container">
                    <ul>
                        <li><a href="TOFtopup.html" class="text-center"><img src="img/garena_card.png">
                                <div class="product-title"><br><b>บัตร Garena</b></div>
                            </a></li>
                        <li><a href="Genshintopup.html" class="text-center"><img src="img/razer_card.png">
                                <div class="product-title"><br><b>บัตร Razer Gold</b></div>
                            </a></li>
                        <li><a href="valorant.html" class="text-center"><img src="img/steam_card.png">
                                <div class="product-title"><br><b>บัตร Steam Wallet</b></div>
                            </a></li>
                        <li><a href="PUBG.html" class="text-center"><img src="img/true_card.png">
                                <div class="product-title"><br><b>บัตรเติมเงิน True Money</b></div>
                            </a></li>
                        <li><a href="rov.html" class="text-center"><img src="img/battle_card.png">
                                <div class="product-title"><br><b>บัตรเติมเงิน BATTLENET</b></div>
                            </a></li>
                    </ul>


                </div>
            </div>

        </div>


    </section>


    <section class="Footer">
        <div class="footer">
            <h1>Footer</h1>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>