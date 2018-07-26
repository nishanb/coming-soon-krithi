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
</head>
<body>

<section id="main">
    <div id="container">

        <div class="box img-s">
            <img class="img-fluid" src="img/logo1.png">
        </div>

        <div class="box text-s" id="main-text">
            <h1>We're Coming Soon</h1>
            <br>
            <h6>Maintained By <a href="http://youflik.com" class="btn-link">Youflik Web Devlopment Studio</a></h6>
        </div>

    </div>
</section>

<!--  JavaScript -->
<script>
    window.sr = ScrollReveal();
    sr.reveal('.img-s', {duration: 2000, origin: 'top', distance: '200px'});
    sr.reveal('.text-s', {duration: 2000, origin: 'top', distance: '200px'});

</script>
</body>
</html>