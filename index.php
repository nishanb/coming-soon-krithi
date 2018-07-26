<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>

<section id="main">
    <div id="container"><!-- flex container -->


        <div class="box img-s">
            <img class="" src="img/logo1.png">
        </div>

        <br>
        <div class="box text-s" id="main-text">
            <h1>We're Coming Soon</h1>
            <h5>Maintained By <a href="youflik.com">Youflik Web Devlopment Studio</a></h5>
        </div>


    </div>
</section>

<!-- Optional JavaScript -->

<script>
    window.sr = ScrollReveal();
    sr.reveal('.img-s', {duration: 2000, origin: 'top', distance: '200px'});
    sr.reveal('.text-s', {duration: 2000, origin: 'top', distance: '200px'});

</script>
</body>
</html>