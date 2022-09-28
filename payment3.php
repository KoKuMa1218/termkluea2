<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <input type="radio" id="r1" name="radio" />
    <label for="r1">
        <img src="img/truewallet.jpg " width="150" height="75" alt="" />
    </label>

    <input type="radio" id="r2" name="radio" />
    <label for="r2">
        <img src="img/razergold.jpg" width="150" height="75" alt="" />
    </label>

    <input type="radio" id="r3" name="radio" />
    <label for="r3">
        <img src="img/dtac.jpg" width="150" height="75" alt="" />
    </label>
    <script>
        $('.img').click(function() {
                    $('.img').css("border", "none");  
                    $(this).css("border", "1px solid grey");})
    </script>
</body>

</html>