<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles_shop.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <?php include 'header.php' ?>

    <canvas>
    </canvas>

    <script src="js/three.min.js"></script>
    <script src="js/OrbitControls.js"></script>
    <script>
        $(document).ready(function($) {
            var id = 1;
            var request = $.ajax({
                url: "api_shop.php",
                method: "POST",
                data: {
                    id: id
                },
                dataType: "JSON"
            })

            request.done(function(data) {
                $('body').append(data.code)
                console.log(data.code)
            })

            request.fail(function(jqXHR, textStatus) {
                alert("Request failed: " + textStatus)
            })
        });
    </script>
</body>

</html>